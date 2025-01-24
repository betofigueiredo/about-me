import base64

from cryptography.fernet import Fernet
from cryptography.hazmat.primitives import hashes
from cryptography.hazmat.primitives.kdf.pbkdf2 import PBKDF2HMAC


def generate_key(password_key: str) -> bytes:
    b_password = bytes(password_key, encoding="utf-8")
    kdf = PBKDF2HMAC(
        algorithm=hashes.SHA256(),
        length=32,
        salt=b"dSsT\xd36\xe2>\x80\x10\xeb\x7fF\xff|\x10",
        iterations=600000,
    )
    return base64.urlsafe_b64encode(kdf.derive(b_password))


def encrypt(key: bytes, content: str) -> bytes:
    f = Fernet(key)
    token = f.encrypt(bytes(content, encoding="utf-8"))
    return token


def decrypt(key: bytes, content: bytes) -> str:
    f = Fernet(key)
    try:
        token = f.decrypt(content)
        return token.decode()
    except Exception:
        return ""
