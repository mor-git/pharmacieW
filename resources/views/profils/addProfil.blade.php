<div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br><br>
<div>
    <form method="post" action="{{ url('/storeProfil')}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Ajouter un Profil</label><br><br>
        <input type="text" placeholder="Name" name="libelle"><br><br>
        <button >Valider</button>
    </form>
</div>
<div>
    @foreach($profils as $profil)
        <p>{{ $profil->libelle }}&nbsp;&nbsp;<a href="{{ url('/editProfil', $profil->id)}}">Modifier</a><p>
    @endforeach
</div>