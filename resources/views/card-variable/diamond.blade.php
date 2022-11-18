<container>
                                   
    <card class="no-{{ $cardVariables[0] }} diamond">
        <corner>
            @switch($cardVariables[0])
                @case(1)
                <value>A</value>
                @break

                @case(11)
                <value>J</value>
                @break

                @case(12)
                <value>Q</value>
                @break

                @case(13)
                <value>K</value>
                @break
            
                @default
                <value>{{ $cardVariables[0] }}</value> 
            @endswitch
            
            <suit>♦</suit>
        </corner>
        <center>
            
            {{-- card number --}}
            @switch($cardVariables[0])
                    
                @case(11)
                ♝︎
                    @break
                @case(12)
                ♛︎
                    @break
                @case(13)
                ♔︎
                    @break
                @default

                @for($i = 0; $i < $cardVariables[0]; $i++)
                    <symbol>♦</symbol>
                @endfor
                    
            @endswitch
            
            
        </center>
        <corner>
            @switch($cardVariables[0])
                @case(1)
                <value>A</value>
                @break

                @case(11)
                <value>J</value>
                @break

                @case(12)
                <value>Q</value>
                @break

                @case(13)
                <value>K</value>
                @break
            
                @default
                <value>{{ $cardVariables[0] }}</value> 
            @endswitch
            <suit>♦</suit>
            
        </corner>
    </card>
</container>