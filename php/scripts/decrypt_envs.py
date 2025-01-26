import os
from getpass import getpass

from helpers import decrypt, generate_key

dir_path = os.path.dirname(os.path.realpath(__file__))

password = getpass()
result = []

with open(f"{dir_path}/../.env.encrypted", "r") as reader:
    encrypt_key = generate_key(password)
    for line in reader:
        if "=" in line:
            division = line.find("=")
            key = line[:division]
            value = line[division + 1 :].replace("\n", "").strip()
            decrypted_value = decrypt(encrypt_key, value.encode("utf-8"))
            if decrypted_value:
                result.append(f"{key}={decrypted_value}")


if result:
    with open(f"{dir_path}/../.env", "w") as writer:
        writer.write("\n".join(result))
else:
    print("🛑 Wrong password!")
