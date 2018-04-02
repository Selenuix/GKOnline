@extends('template')		
	@section('content')
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
			<header id="header">
				<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>

			<h1 align="center">
				<p>Envoyez moi un email :</p>
			</h1>

			<!-- Main -->
			<section id="main">
				<form>
					<div>
						<label for="InputEmail">Adresse Email :</label>
						<input type="email" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre adresse Email">
					</div>
					<div>
						<label for="InputName">Nom :</label>
						<input type="email" id="InputName" aria-describedby="nameHelp" placeholder="Votre nom">
					</div>
					<div>
						<label for="Textarea">Message :</label>
						<textarea id="Textarea" rows="3" style="resize:none;" placeholder="Votre message"></textarea>
					</div><br>
					<button type="submit">Envoyer</button>
				</form>
			</section>
    @endsection
