@props(['items'])
<span
    x-data="{
                    text: '',
                    textArray :  {{ json_encode($items)  }},
                    textIndex: 0,
                    charIndex: 0,
                    pauseEnd: 1000,
                    pauseStart: 20,
                    typeSpeed: 75,
                    direction: 'forward'
                 }" x-init="(() => {

                    let typingInterval = setInterval(startTyping, $data.typeSpeed);

                 function startTyping(){
                    let current = $data.textArray[ $data.textIndex ];
                    if($data.charIndex > current.length){
                         $data.direction = 'backward';
                         clearInterval(typingInterval);
                         setTimeout(function(){
                            typingInterval = setInterval(startTyping, $data.typeSpeed);
                         }, $data.pauseEnd);
                    }

                    $data.text = current.substring(0, $data.charIndex);
                    if($data.direction == 'forward'){
                        $data.charIndex += 1;
                     } else {
                        if($data.charIndex == 1){
                            $data.direction = 'forward';
                            clearInterval(typingInterval);
                            setTimeout(function(){

                                $data.textIndex += 1;
                                if($data.textIndex >= $data.textArray.length){
                                    $data.textIndex = 0;
                                }

                                typingInterval = setInterval(startTyping, $data.typeSpeed);
                            }, $data.pauseStart);
                        }
                        $data.charIndex -= 1;
                     }
                 }
             })()">

    <span class="text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500 font-semibold" x-text="text"></span>

</span>
