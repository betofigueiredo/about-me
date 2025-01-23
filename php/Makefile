# Include the .env file and setup-env.sh script
-include .env
export

# Colors for output
GREEN:=\033[0;32m
BLUE:=\033[0;34m
NC:=\033[0m

# Define the default target
.DEFAULT_GOAL := help

ARGS = $(filter-out $@,$(MAKECMDGOALS))
MAKEFLAGS += --silent

DYNAMIC_HASH := $(shell uuidgen | sed 's/[-]//g' | head -c 10)

.PHONY: help
help:
	# Start message
	@echo "	"
	@echo "	██████╗ ███████╗████████╗ ██████╗  "
	@echo "	██╔══██╗██╔════╝╚══██╔══╝██╔═══██╗ "
	@echo "	██████╔╝█████╗     ██║   ██║   ██║ "
	@echo "	██╔══██╗██╔══╝     ██║   ██║   ██║ "
	@echo "	██████╔╝███████╗   ██║   ╚██████╔╝ "
	@echo "	╚═════╝ ╚══════╝   ╚═╝    ╚═════╝  "
	@echo "	----------------------------------"
	@echo "	"
	@echo "	  ⚡️ $(BLUE)Available commands$(NC)\n"
	@echo "	  $(BLUE)DEVELOPMENT$(NC)"
	@echo "	  make $(GREEN)dev$(NC)                    Starts development mode"
	@echo "	  make $(GREEN)stop$(NC)                   Stop development mode"
	@echo "	"
	@echo "	  $(BLUE)PRODUCTION$(NC)"
	@echo "	  make $(GREEN)build$(NC)                  Builds the production dist"
	@echo "	  make $(GREEN)deploy$(NC)                 Deploys the production dist"
	@echo "	"
	@echo "	  $(BLUE)GENERAL$(NC)"
	@echo "	  make $(GREEN)encrypt-envs$(NC)           Encrypt '.env' file"
	@echo "	  make $(GREEN)decrypt-envs$(NC)           Decrypt '.env.encrypted' file"
	@echo "	  make $(GREEN)ssh$(NC)                    Access server via SSH"
	@echo "	"


.PHONY: check-envs
check-envs:
ifeq (,$(wildcard ./.env))
	echo "\n 🛑 .env file not found!\n"
	exit 1;
endif

.PHONY: check-encrypted-envs
check-encrypted-envs:
ifeq (,$(wildcard ./.env.encrypted))
	echo "\n 🛑 .env.encrypted file not found!\n"; \
	exit 1;
endif

.PHONY: encrypt-envs
encrypt-envs:
	make check-envs; \
	cd scripts; \
	uv run encrypt_envs.py

.PHONY: decrypt-envs
decrypt-envs:
	make check-encrypted-envs; \
	cd scripts; \
	uv run decrypt_envs.py

.PHONY: dev
dev:
	docker compose up

.PHONY: stop
stop:
	docker compose down

.PHONY: build
build:
	cp -a ./src/assets ./src/assets-backup; \
	rm -rf ./src/assets; \
	mkdir ./src/assets; \
	grep -rl 'fonts-[a-zA-Z0-9]\{10\}\.css' ./src/includes/css.php | xargs sed -i 's/fonts-[a-zA-Z0-9]\{10\}\.css/fonts-$(DYNAMIC_HASH).css/g'; \
	grep -rl 'globals-[a-zA-Z0-9]\{10\}\.css' ./src/includes/css.php | xargs sed -i 's/globals-[a-zA-Z0-9]\{10\}\.css/globals-$(DYNAMIC_HASH).css/g'; \
	find ./src/assets-backup -regextype sed -regex ".*/fonts-[a-zA-Z0-9]\{10\}\.css" -exec cp {} ./src/assets/fonts-$(DYNAMIC_HASH).css \;
	find ./src/assets-backup -regextype sed -regex ".*/globals-[a-zA-Z0-9]\{10\}\.css" -exec cp {} ./src/assets/globals-$(DYNAMIC_HASH).css \;
	rm -rf ./src/assets-backup;

.PHONY: deploy
deploy:
	make check-encrypted-envs; \
	make decrypt-envs; \
	rsync -azP --delete dist/ $(SSH_USER)@$(SSH_HOST):$(SSH_FOLDER); \
	rm .env

.PHONY: ssh
ssh:
	make check-encrypted-envs; \
	make decrypt-envs; \
	ssh $(SSH_USER)@$(SSH_HOST)
	rm .env
