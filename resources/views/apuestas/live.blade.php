
 @extends('welcome')  
  @section('content')
  <div id="reloj" class="container box__flex">
    @foreach ($data as $key)
    <div>
      
      {{-- <li>{{$key["event_key"]}}</li> --}}

    <div class="box__container__league" id="{{$key["event_key"]}}">
        <ul class="collapsible box__macth">
          <li>
            <div class="collapsible-header macth">
              <div id="result" class="date__macth">
                  {{$key["event_status"]}}'
              </div>
              <div class="date__macth">
                <img src="{{$key["league_logo"]}}" width="25px" alt="" srcset="">
            </div>
              <div class="team__home">
                {{$key["event_home_team"]}}
              </div>
              <div class="team__home__escudo">
                <?php 
                  $teamlocalkey = $key["home_team_key"];
                  $APIkey='e2bedfc31c09518bf47f91677c2ce03ea7503dcfc5bf3559363cd5f1b3e0bc58';
                  $equipo = Http::get("https://allsportsapi.com/api/football/?&met=Teams&teamId=$teamlocalkey&APIkey=$APIkey")->json()['result'];
                  foreach ($equipo as $logo) {
                    // var_dump();
                    echo '<img src="'.$logo['team_logo'].'" alt="" width="25px">';
                  }
                ?>
              
              </div>
              <div id="result">
                {{$key["event_final_result"]}}
              </div>
              <div class="team__visit__escudo">
                <?php 
                $teamlocalkey = $key["away_team_key"];
                $APIkey='e2bedfc31c09518bf47f91677c2ce03ea7503dcfc5bf3559363cd5f1b3e0bc58';
                $equipo = Http::get("https://allsportsapi.com/api/football/?&met=Teams&teamId=$teamlocalkey&APIkey=$APIkey")->json()['result'];
                foreach ($equipo as $logo) {
                  // var_dump();
                  echo '<img src="'.$logo['team_logo'].'" alt="" width="25px">';
                }
              ?>
              
              </div>
              <div class="team__visit">
                {{$key["event_away_team"]}}
              </div>
              <div class="more__apuesta">
                  <svg width="25px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ff2600" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
              </div>
            </div>
            <div class="collapsible-body">
                  <?php 
                      $APIkey ='e2bedfc31c09518bf47f91677c2ce03ea7503dcfc5bf3559363cd5f1b3e0bc58';
                      $id = $key["event_key"];
                      $posilidad =  Http::get("https://allsportsapi.com/api/football/?&met=Odds&matchId=$id&APIkey=$APIkey")->json();
                      // var_dump($posilidad) 
                      if (isset($posilidad['result'])) {
                        $posilidad2 =  $posilidad['result'][$id];
                            foreach ($posilidad2 as $keys => $value) {
                              if($value["odd_bookmakers"] == 'bet365' ){
                                $equipolocal = $value["odd_1"];
                                $empate = $value["odd_x"];
                                $equipovisita = $value["odd_2"];
                                echo '<label for="">
                                      <input type="radio" name="bets" id="" value="win-home">x '.$equipolocal.'
                                      </label>';
                                echo '<label for="">
                                      <input type="radio" name="bets" id="" value="duede">x '.$empate.'
                                      </label>'; 
                                echo '<label for="">
                                      <input type="radio" name="bets" id="" value="win-visit">x '.$equipovisita.'
                                      </label>';
                                
                              };  
                              
                            };
                      }
                        else{
                          echo '<div class= style="text-align:center;""container">no hay apuestas disponibles para este evento</div>';
                        };
                        
                    ?>
              </div>
          </li>
        </ul>
      </div>
    
    @endforeach
    </div>

<div class="rondas">
  <button class="confirmar__apuestas" type="submit">
    Confirmar Apuestas
  </button>
</div>
</div>


   @endsection   
  