<div id="whatsapp-widget" style=" z-index: 9999; position:relative;">
        <!-- WhatsApp Widget Style -->
        <style>
        
            #wppLink {
                display: flex;
                align-items: center;
                position: fixed;
                padding: 0 25px 0 0;
                bottom: 40px;
                right: 85px;
                background-color: #4ea950;
                color: #fff;
                border-radius: 50px;
                box-shadow: 0px 0px 10px 0px #00000033;
                z-index: 100;
                transition: .5s ease-in-out;
                font-weight: 600
            }
            #wppLink:hover {
                opacity: .8
            }
            #wppIcon {
                height: 20px;
                margin: 7px 15px;
                vertical-align: middle
            }
            #wppText {
                font-size: 13px;
                display: inline-block;
                padding: 0;
                color: #fff
            }
            #wppLink.minimized {
                transform: translateX(50px);
                padding: 0;
            }
            #wppLink.minimized #wppText {
                display: none;
            }

        </style>

        <a href="https://api.whatsapp.com/send?phone=551141110917" rel="noreferrer" onclick="conversion('Whatsapp');" aria-label="Link Direto para o contato da PontoÁgua no Whatsapp" id="wppLink" target="_blank" class="">
            <img loading="lazy" id="wppIcon" src="images/wpp.png?v=0.1" alt="Logomarca do WhatsApp">
            <span id="wppText">Contato via Whatsapp</span>
        </a>
                    <!-- adds the dynamic sizing script whenever user specified a selector -->
            
            <script>
                function doSomething() {
                    // whatsapp widget node
                    
                    var widget = document.querySelector("#wppLink");
                    
                    // target node
                    var target = document.querySelector("#bottom-main");
                    
                    // who knows, right?
                    if ( !target )
                    {
                        return;
                    }

                    // scroll handler
                    var onScroll = function (){
                        
                        var widgetOffset = widget.getBoundingClientRect();
                        var targetOffset = target.getBoundingClientRect();

                        // checks if view rect is already far from top
                        if (widgetOffset.top >= targetOffset.top) {
                            
                            if (!widget.className.includes('minimized'))
                            {
                                // add minimized class
                                widget.className += ' minimized';
                            }
                        } else {
                            // removes minimized class
                            widget.className = widget.className.replace(' minimized', '');
                        }
                    };

                    // adds croll handlers to screen related events
                    window.addEventListener('scroll', onScroll );
                    window.addEventListener('resize', onScroll );

                    // also triger it once
                    onScroll();
                };

                if (document.readyState === "loading") {  // Ainda carregando
                    document.addEventListener("DOMContentLoaded", doSomething);
                } else {  // `DOMContentLoaded` foi disparado
                    doSomething();
                }

            </script>
            </div>