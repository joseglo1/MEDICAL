<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'The email validation method must be passed an array.';
$lang['email_invalid_address'] = 'Direccion de correo invalida: %s';
$lang['email_attachment_missing'] = 'No puedo localizar el archivo adjunto: %s';
$lang['email_attachment_unreadable'] = 'No puedo abrir archivo adjunto: %s';
$lang['email_no_from'] = 'No se puede mandar correo "From" header.';
$lang['email_no_recipients'] = 'Debe colocar recipientes: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'No puedo mandar correo usando PHP mail(). Your server might not be configured to send mail using this method.';
$lang['email_send_failure_sendmail'] = 'No puedo mandar correo usando PHP Sendmail. Your server might not be configured to send mail using this method.';
$lang['email_send_failure_smtp'] = 'No puedo mandar correo us< PHP SMTP. Your server might not be configured to send mail using this method.';
$lang['email_sent'] = 'Tu mensaje se envio usando el siguiente protocolo: %s';
$lang['email_no_socket'] = 'No puedo abrir el socket to Sendmail. Revisar configuracion.';
$lang['email_no_hostname'] = 'Ud no especific� el nombre de hostname SMTP';
$lang['email_smtp_error'] = 'El siuiente error  SMTP se encontro: %s';
$lang['email_no_smtp_unpw'] = 'Error: Debe colocar un c�digo de usuario y comtrase�a SMTP.';
$lang['email_failed_smtp_login'] = 'Fallo enviando comando AUTH LOGIN . Error: %s';
$lang['email_smtp_auth_un'] = 'Fallo en la authenticaci�n del nombre de usuario. Error: %s';
$lang['email_smtp_auth_pw'] = 'Fallo en la autenticaci�n de la contrase�a. Error: %s';
$lang['email_smtp_data_failure'] = 'No se pudo enviar data: %s';
$lang['email_exit_status'] = 'Exit status code: %s';
