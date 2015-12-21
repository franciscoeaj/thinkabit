			<?php
			if (isset($_POST["submit"])) {
				$name = $_POST["name"];
				$email = $_POST["email"];
				$phone = $_POST["phone"];
				$location = $_POST["phone"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];
				$destiny = "contato@thinkabit.com.br, emerson@thinkabit.com.br, francisco@thinkabit.com.br, joao@thinkabit.com.br";

				if (empty($name) || empty($email) || empty($phone) || empty($location) || empty($subject) ||  empty($message)) {
					$msg = [0, "Por favor, preencha todos os campos."];
				} else {
					$mail_to      = $destiny;
					$mail_subject = $subject;
					$mail_headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion() . "\r\n" .
				    'MIME-Version: 1.0' . "\r\n" .
				    'Content-Type: text/html; charset=UTF-8';
					$mail_message = '
					<body>
						<p>Atenção, seus merda!</p>
						<p>Um possível cliente entrou em contato com vocês através do formulário de contato do site da Think a bit.<br />Abaixo seguem os as informações enviadas: </p>
						<p>
							Nome: ' . $name . ';<br />
							E-mail: ' . $email . ';<br />
							Telefone: ' . $phone . ';<br />
							Cidade/Estado: ' . $location . ';<br />
							Assunto: ' . $subject . ';<br />
							Mensagem: ' . $message . '.<br />
						</p>
						<p>Cuidem dele com carinho. Mas lembrem-se que chupar rola só de brother.</p>
					</body>';

					$msg = [1, "Mensagem enviada com sucesso! Em breve entraremos em contato. :)"];

					mail($mail_to, $mail_subject, $mail_message, $mail_headers);
				}
			}
			?>
			<div id="content" class="contact-content">
				<section id="first-section">
					<div class="container-fluid">
						<div class="section-meta">
							<h2 class="section-title">Fale conosco</h2>
							<h3 class="section-description">Em caso de dúvidas, sugestões, reclamações ou pedidos de orçamento, contate-nos. Ficaremos felizes em atendê-lo! :-)</h3>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<form id="main-contact" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
									<div class="col-lg-8 col-lg-offset-2">
										<?php
										if (isset($msg)) {
											if ($msg[0]) {
												echo '<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> ' . $msg[1] . '</div>';
											} else {
												echo '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove"></i> ' . $msg[1] . '</div>';
											}
										}
										?>
										<label for="name">Nome completo*</label>
										<input required type="text" name="name" placeholder="ex. Fulano da Silva" />
										<label for="email">Endereço de e-mail*</label>
										<input required type="email" name="email" placeholder="ex. nome@email.com" />
										<label for="phone">Telefone com DDD*</label>
										<input required type="tel" name="phone" placeholder="ex. (01) 2345-6789" />
										<label for="location">Cidade e estado*</label>
										<input required type="text" name="location" placeholder="ex. São Paulo (SP)" />
										<label for="subject">Assunto da mensagem*</label>
										<input required type="text" name="subject" placeholder="ex. Orçamento" />
										<label for="message">Mensagem*</label>
										<textarea required name="message" placeholder="Mensagem"></textarea>
										<button type="submit" name="submit">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="container-fluid">
						<div class="section-meta">
							<h2 class="section-title">Redes sociais</h2>
							<h3 class="section-description">Você também pode entrar em contato conosco através das nossas redes sociais</h3>
							<div class="social-networks">
								<p><a href="" target="_blank"><i class="fa fa-facebook facebook"></i> http://facebook.com/thinkabitbrasil</a></p>
								<p><a href="" target="_blank"><i class="fa fa-twitter twitter"></i> http://twitter.com/thinkabitbrasil</a></p>
								<p><a href="" target="_blank"><i class="fa fa-instagram instagram"></i> http://instagram.com/thinkabitbrasil</a></p>
							</div>
						</div>
					</div>
				</section>
			</div>