<?php 

class Config{

    //constantes para hospedagem/local
    const SITE_URL   = "http://localhost";
    const SITE_PASTA = "projetoBase";
    const SITE_NOME  = "Nome do site aqui";
    const SITE_EMAIL = "email do site vai aqui";

    //constantes para o banco de dados
    const BD_HOST     = "localhost";
    const BD_USER     = "root";
    const BD_PASS     = "";
    const BD_NAME     = "SistemaCardapio";
    const BD_PREFIX   = "MA_"; 

    //contantes para o email
    const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "SITE@gmail.com";
	const EMAIL_NOME = "SITE";
	const EMAIL_SENHA = "SENHA";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "SITE@gmail.com";
}

?>