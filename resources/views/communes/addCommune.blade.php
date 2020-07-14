<div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br><br>
<div>
    <form method="post" action="{{ url('/storeCommune')}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Ajouter un Commune</label><br><br>
        <input type="text" placeholder="Name" name="name"><br><br>
        <select name="region">
            <option>Choix Région</option>
        @foreach($regions as $region)
            <option value="{{ $region->id }}">{{ $region->name }}</option>
        @endforeach
        </select><br><br>
        <button >Valider</button>
    </form>
</div>
<div>
    @foreach($communes as $commune)
    <p>{{ $commune->regions->name }}&nbsp;&nbsp;&nbsp;{{ $commune->name }}&nbsp;&nbsp;&nbsp;
    <a href="{{ url('/editCommune', $commune->id)}}">Modifier</a>&nbsp;&nbsp;<a href="{{ url('/destroyCommune', $commune->id)}}">Supprimer</a><p>
    @endforeach
</div>