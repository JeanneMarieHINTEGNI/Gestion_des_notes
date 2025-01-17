<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Unités d'Enseignement</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Code</th>
                <th class="border border-gray-300 px-4 py-2">Nom</th>
                <th class="border border-gray-300 px-4 py-2">ECTS</th>
                <th class="border border-gray-300 px-4 py-2">Semestre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ues as $ue)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $ue->code }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $ue->nom }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $ue->credits_ects }}</td>
                    <td class="border border-gray-300 px-4 py-2">S{{ $ue->semestre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>

