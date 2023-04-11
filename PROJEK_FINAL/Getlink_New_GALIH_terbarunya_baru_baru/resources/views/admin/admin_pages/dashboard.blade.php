@extends('admin.layout.base')

@section('admin_konten')
    <div class="adDash">
        <div class="adCard1">
            <a href="{{ url('get_link') }}" style="text-decoration: none">
                <div class="cardKan">
                    <p class="adTeCa">MICROSITE</p>
                    <p class="adTeCu1">Microsite</p>
                </div>
            </a>
            <i class="fa-regular fa-file-lines card_icon"></i>
        </div>
        <div class="adCard2">
            <a href="{{ url('account') }}" style="text-decoration: none">
                <div class="cardKan">
                    <p class="adTeCa">AKUN USER</p>
                    <p class="adTeCu2">User</p>
                </div>
            </a>
            <i class="fa-solid fa-user card_iconUser"></i>
        </div>
        <div class="adCard3">
            <a href="{{ url('paket') }}" style="text-decoration: none">
                <div class="cardKan">
                    <p class="adTeCa">MICROSITE <br> SLOT</p>
                    <p class="adTeCu3">Paket</p>
                </div>
            </a>
            <i class="fa-regular fa-gem card_iconMS"></i>
        </div>
        <div class="adCard4">
            <a href="{{ url('budget') }}" style="text-decoration: none">
                <div class="cardKan">
                    <p class="adTeCa">BUDGET</p>
                    <p class="adTeCu4">Budget</p>
                </div>
            </a>
            <i class="fa-solid fa-money-bill card_iconB"></i>
        </div>
    </div>

    
@endsection
