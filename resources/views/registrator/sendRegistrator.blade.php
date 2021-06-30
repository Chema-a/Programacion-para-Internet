<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <h1>Registro de Usuario</h1>
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Codigo de invitación</span>
        <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="code" id="code" value="{{ $code->code }} " readonly>
    </label>
    </form>
</body>
</html>