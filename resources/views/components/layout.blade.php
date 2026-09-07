@props([
	'title'  => 'Laracasts26'
])

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>{{ $title }}</title>
	<style>
		nav > a {
			text-decoration: none;
			color: blue;
		}
		.max-w-400  {
			max-width: 400px;
			margin: auto
		}
		.card
		{
			background: lightgreen;
			padding: 2rem;
			text-align: center;
		}
	</style>

	@vite('resources/css/app.css')
</head>

<body>

	<nav gap-5>
		<a href="/"          >Home</a>
		<a href="/about"     >About Us</a>
		<a href="/contacts"  >Contacts</a>
	</nav>

	<main>

		{{ $slot }}

	</main>

</body>

</html>
