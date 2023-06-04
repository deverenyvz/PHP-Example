<?php
function password_generate($char)
{
	$data = '1234567890QWERTYUIOPĞÜAİŞSDLFGKHJZXÇÖCVMNBqwertyuıuopğüasdfghjklşizxcvbnmöç,:.;<>';
	return substr(str_shuffle($data), 0, $char );
}
echo password_generate(10)."\n";
?>