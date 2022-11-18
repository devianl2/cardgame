<!DOCTYPE html>
<html>
    <head>
        @include('global.header')
    </head>
    <body>
        
        <div class="container">
            <div class="row mb-2">
                @include('global.message')
            </div>

            <div class="row mb-2">
              <div class="col-sm-12">
                <form class="form-inline" action="/" method="GET">
                    <label for="email">Number of player(s): </label>
                    <input type="number" name="players" class="form-control" value="{{ $players }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>

            @if ($players > 0)
            <div class="row">
                <table class="table table-bordered">
                    @foreach ($playerCards as $player => $playerCard)
                    <tr >
                        <td style="width: 10%">
                            Player {{ $player + 1 }}
                        </td>
                        <td style="width: 90%">
                            {{-- Break card code with comma --}}
                            {{ implode(", ", $playerCard) }}

                            {{-- Generate card design --}}
                            @foreach ($playerCard as $card)

                                @php($cardVariables  =   explode("-", $card))

                                <container>
                                   
                                @switch($cardVariables[1])
                                    @case('S')
                                    @include('card-variable.spade')
                                        @break

                                    @case('H')
                                    @include('card-variable.heart')
                                        @break

                                    @case('D')
                                    @include('card-variable.diamond')
                                        @break

                                    @case('C')
                                    @include('card-variable.club')
                                        @break
                                
                                    @default
                                        
                                @endswitch
                                   
                                </container>
                           
                               
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                   
                    
                </table>
            </div>
            @endif
        
          </div>

        {{-- Bootstrap cdn --}}
        @include('global.footer')
    </body>
</html>