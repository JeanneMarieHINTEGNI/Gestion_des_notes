
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer une UE</title>
</head>
<body>
    <h1>Créer une Unité d'Enseignement</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('ues.store') }}" method="POST">
        @csrf
        <div>
            <label for="code_ue">Code UE</label>
            <input type="text" id="code_ue" name="code_ue" required>
        </div>
        <div>
            <label for="nom_ue">Nom de l'UE</label>
            <input type="text" id="nom_ue" name="nom_ue" required>
        </div>
        <div>
            <label for="credits_ects">Crédits ECTS</label>
            <input type="number" id="credits_ects" name="credits_ects" required>
        </div>
        <div>
            <label for="semestre">Semestre</label>
            <input type="text" id="semestre" name="semestre" required>
        </div>
        <div>
            <label for="ects">Crédits ECTS :</label>
            <input type="number" id="ects" name="ects" value="{{ old('ects') }}" required>
        </div>
        
        <button type="submit">Créer l'UE</button>
    </form>
</body>
</html>
