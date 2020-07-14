<div>
    <form method="post" action="{{ url('/updateProfil', $profil->id)}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Modifier Profil</label><br><br>
        <input type="text" value="{{ $profil->libelle }}" name="libelle"><br><br>
        <button >Update</button>
    </form>
</div>