<?php
$senha = 'minhasenha';

$hash = password_hash($senha, PASSWORD_ARGON2I);
if (password_verify($senha, $hash)) {
    echo "senha confere";
} else {
    echo "senha não confere";
}
