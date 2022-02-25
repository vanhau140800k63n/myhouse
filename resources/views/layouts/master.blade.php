<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name = "csrf-token" content = "{{csrf_token ()}}">

	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-hidden">
	<div class="flex h-screen">
		<div class="w-2/12 bg-[#343a40] px-[8px]">@include('partial.sidebar')</div>
		<div class="w-10/12">@yield('content')</div>
	</div>
</body>
</html>