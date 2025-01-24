import os

from helpers import encrypt, generate_key

dir_path = os.path.dirname(os.path.realpath(__file__))


password = input("Enter password:")
result = []

with open(f"{dir_path}/../.env", "r") as reader:
    encrypt_key = generate_key(password)
    for line in reader:
        if "=" in line:
            division = line.find("=")
            key = line[:division]
            value = line[division + 1 :].replace("\n", "").strip()
            encrypted_value = encrypt(encrypt_key, value)
            result.append(f"{key}={encrypted_value.decode('utf-8')}")


with open(f"{dir_path}/../.env.encrypted", "w") as writer:
    writer.write("\n".join(result))
