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
	@echo "	  make $(GREEN)lint$(NC)                   Runs the linters"
	@echo "	"
	@echo "	  $(BLUE)PRODUCTION$(NC)"
	@echo "	  make $(GREEN)build$(NC)                  Builds the production dist"
	@echo "	  make $(GREEN)preview$(NC)                Show build preview"
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
	pnpm run dev

.PHONY: build
build:
	pnpm run build

.PHONY: preview
preview:
	pnpm run preview

.PHONY: deploy
deploy:
	make check-encrypted-envs; \
	make decrypt-envs; \
	rsync -azP --delete dist/ $(SSH_USER)@$(SSH_HOST):$(SSH_FOLDER); \
	rm .env

.PHONY: lint
lint:
	pnpm run lint

.PHONY: ssh
ssh:
	make check-encrypted-envs; \
	make decrypt-envs; \
	ssh $(SSH_USER)@$(SSH_HOST)
	rm .env
