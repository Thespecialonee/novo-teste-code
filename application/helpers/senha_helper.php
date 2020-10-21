<?php
function senha($senha)
{
	return hash($senha, 'SHA1');
}
