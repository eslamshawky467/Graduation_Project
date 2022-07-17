<div wire:poll>
    <div class="container">
        <h3 class=" text-center">

         <!--   @if (auth()->user()->email == 'eslamalkbeer887@gmail.com')

            @endif-->
            <a class="btn btn-primary" href="{{ Url('delete_chat/'.$reciever) }}">حذف المحادثة</a>
{{--
             @if($name->name != null)
            <p>{{$name->name}}</p>
            @endif  --}}
        </h3>
        <div class="messaging">
            <div class="inbox_msg row">
                <div class="col-12 col-md-4 border-1 border p-0">
                    <div class="headind_srch ">
                        <div class="recent_heading">
                        <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">

                                    <input type="text" class="search-bar" wire:keydown="search" wire:model.defer="searchh"  placeholder="Search" >




                                <span class="input-group-addon">
                                    <button type="button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- inbox chat users -->
                    <div class="inbox_chat h-100">


                    @if ($user != null)
                        @foreach ($user as $item)

                            <div class="chat_list active_chat">
                                <div class="chat_people">
                                    <div class="chat_img">
                                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                    </div>
                                    <div class="chat_ib">
                                        <a href="{{url('chatnow/'.$item->id)}}" >
                                            <h5>
                                                {{$item->name}}
                                                <span class="chat_date"></span>
                                            </h5>
                                        </a>
                                        <p>
                                            Test, which is a new approach to have all solutions
                                            astrology under one roof.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                            @if(Auth::user()->usertype == '1')
                                    @foreach ($users as $item)
                                        <div class="chat_list active_chat">
                                            <div class="chat_people">
                                                <div class="chat_img">
                                                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                </div>
                                                <div class="chat_ib">
                                                    <a href="{{url('chatnow/'.$item->id)}}" >
                                                        <h5>
                                                            {{$item->name}}
                                                            <span class="chat_date"></span>
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Test, which is a new approach to have all solutions
                                                        astrology under one roof.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            @else

                                @foreach ($users as $item)
                                       @if($item->usertype != 'Admin')
                                            @if (auth()->user()->usertype == 'Doctor')
                                                <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                            <div class="chat_img">
                                                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                            </div>
                                                            <div class="chat_ib">
                                                                <a href="{{url('chatnow/'.$item->id)}}" >
                                                                    <h5>
                                                                        {{$item->name}}
                                                                        <span class="chat_date"></span>
                                                                    </h5>
                                                                </a>
                                                                <p>
                                                                    Test, which is a new approach to have all solutions
                                                                    astrology under one roof.
                                                                </p>
                                                            </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                            <div class="chat_img">
                                                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                            </div>
                                                            <div class="chat_ib">
                                                                <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                    <h5>
                                                                        {{$item->name}}
                                                                        <span class="chat_date"></span>
                                                                    </h5>
                                                                </a>
                                                                <p>
                                                                    Test, which is a new approach to have all solutions
                                                                    astrology under one roof.
                                                                </p>
                                                            </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                            @endif
                    @endif
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <input style="margin-bottom: 20px;margin-left:30px;" class="search-bar w-75 d-block m-auto my-2 form-control rounded-pill" type="text"  wire:keydown="searchchat" wire:model.defer="searchchat"  placeholder="Search" >
                    <hr>
                    <div id="chat" class=" w-100" style="min-height:80vh">

                        @if ($schat != null)
                        @forelse ($schat as $message)

                        @if ($message->user->name == auth()->user()->name)
                            <!-- Reciever Message-->
                            <div  class="outgoing_msg">
                                <div  class="sent_msg">
                                    @if ($message->message_text != null)
                                        <p>
                                            <a href="{{url('deletmsg/'.$message->id)}}" >Delet</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAHBg8QBw4WFQ8TExAVEhMPDQ8YEA8RIBUWGSASEx8YKCogGBoxJxcfIzEtJTUrNjoyGyAzODUsPygtLisBCgoKDg0OGxAQGi0mICU3Ny03Ky03NSsvKy0tNy81KzUrKy83KyswLS0tKy01Ny0xKy0tKy0rOC0tLS0uLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEBAAIDAQAAAAAAAAAAAAAABgEHAgQFA//EAEEQAAECAQQOCAMIAgMAAAAAAAABAgMEERZyBQcSFSExM1FUYZGTstEGEzVBUlOSo2Sk4iM0YnGBobHBFDIiJXP/xAAaAQEBAQEBAQEAAAAAAAAAAAAABQQBAwIG/8QAMREBAAEBBQYFBAMAAwEAAAAAAAECAwQyUVIFERIUcaETFSFi4TGRsdEiQWFCgfAz/9oADAMBAAIRAxEAPwDeIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB8pVKGSSTuiShZmNRVVdR9UUTXVFNP1l81VRTG+WvbK9MZRKoipIl6qH3TIixFTO5Vxfp+5fsdnWVEfz9Z7Jlpe66p/j6Q8y/kr0qJvFNHK2OiHl49pqli/kr0qJvHHeVsdEHj2mqS/kr0qJvHDlbHRB49pqkv5K9Kibxw5Wx0QePaapL+SvSom8cOVsdEHj2mqS/kr0qJvHDlbHRB49pqkv5K9Kibxw5Wx0QePaapL+SvSom8cOVsdEHj2mqS/kr0qJvHDlbHRB49pqkv5K9Kibxw5Wx0QePaapL+SvSom8cOVsdEHj2mqVJ0Us3FuHLLYjntuplulVVakyYUJ19utG+OCNzVd7ar/lO9aw3pEYjoazouJU7yPMTE7pb4ne5HHQAAAAAAAAAAAAAACTthyhWWMhsauB8T/lrREVZts2wp7KpibWZyhjvs/wAIhAF9LAAAAAAAAAAAAA9/o790fX/pDBesUNVhhUljLIrI3zPww1xpm1oT7axiuN8fVqs7Th6KaG9IjEVizouJU7ybMTE7pa4ne5HHQAAAAAAAAAAAAAEXbFyECu7hK2ycdXRhv2GEOXE0AAAAAAAAAAAACg6O/dH1/wCkMF6xQ1WGF6xmezvWMsisjfM/DDXGmbWh4W1jFcb4+r0s7Th6KaG9IjEVizouJU7ybMTE7pa4ne5HHQAAAAAAAAAAAAIu2LkYFd3CVtk46ujDfsMIcuJoAAAAAAAAAAAAFB0d+6Pr/wBIYL1ihqsML1jM9gDvWMsisjfM/DDXGmbWh4W1jFcb4+r0s7Th6KaG9IjEVizouJU7ybMTE7pa4ne5HHQAAAAAAAAAAARdsbIQK7uErbJx1dGG/YYQ5cTQAAAAAAAAAAAAKDo590fX/pDBesUNVhhesZnsAAO9YyyKyN8z8MNcaZtaHhbWMVxvj6vSztOHopob0iMRzFnRcSp3k2YmJ3S1xO9yOOgAAAAAAAAABF2xshAru4StsnHV0Yb9hhDFxNAAAAAAAAAAAAA9WwMrSBGVkRZkfNMvcjjNebOao3x/T2sa907pURgagAAA71jLIrI3zPww1xpm1oeFtYxXG+Pq9LO04eimhvSIxHQ1nRcSp3k2YmJ3S1xO9yOOgAAAAAAAACLtjZCBXdwlbZOOrow37DCGLiaAAAAAAAAAAAAAA+yWUlEkb9i+dvhe1Fm/LvmM9pYUz67nrRazHoxSaUfg9C8zy8Cl6eJJSaUfg9C8x4FJ4klJpR+D0LzHgUniSUmlH4PQvMeBSeJKuteWbjWQlUaHKlS5a1rmo1qpMs8xN2hZU0xTMfVrutc1TMSuiY2AAAAAAAAACLtjZCBXdwlbZOOrow37DCGLiaAAAAAAAAAAAAAAAdOUQbhZ24v4POqnc+4l8Zj5fRMAmAs7WHaceo3iJe08NLZc/rLZhHbwAAAAAAAABFWxshAru4StsnHV0Yb9hhDlxMAAAAAAAAAAAAAAAMLhTCB1I0K4XBiPiY3PuJ3vnMfO50mG4WVrLtOPUbxEvamCnq23L6y2WRlAAAAAAAAAARVsbIQK7uErbJx1dGG/YYQ5cTAAAAAAAAAAAAAAAABhUnTCB1okO4U+Zh9xLhMc3CxtaJ/2Uao3iJW1cFPVtuWKWySKogAAAAAAAACKtj5CBXdwlbZGOrow37DCGLqYAAAAAAAAAAAAAAAAAGHJdJhA+Dm3KnzufSuta9pRqjeIlbWwU9W644pbIIaiAAAAAAAAAIq2PkIFd3CVtkY6ujDfsMIYupgAAAc+qd4F9KnOKnN9cM5HUu8DvSo4qczhnI6l3gd6VHFTmcM5HUu8DvSo4qczhnI6l3gd6VHFTmcM5HUu8DvSo4qczhnI6l3gd6VHFTmcM5HUu8DvSo4qczhnI6l3gd6VHFTmcM5HUu8DvSo4qczhnJwxYzr5AAGHJdJhAqbXCTWSjVG8RI2tgp6t9xxVNjENSAAAAAAAAAEVbHyECu7hK2yMdXRhv2GEMXUwAAYd/qp2CW4ZOi/47Krf4Q/GV7uKX6Cn6Q+kynz6Okyj0CZR6BMo9AmUegTKPQJlHoEyj0BEWceg1FZD7/G/9InEp+wsv/nT0j8INeKer4Ho+AABV2u+0Y1RvESdr4KerfcMVTYZCUgAAAAAAAABFWyMhAru4StsjHV0Yb9hhCl1MAAAAAAAAAAAAAAAAAAAArLXfaMao3iJO18FPVvuGKpsMhKQAAAAAAAAAirZGQgV3cJW2Rjq6MN+wwhS6mAADDv9VOwS2bB6PSN0FqrJ2zq1ve/N+Z+Xqv14iqf5ysxd7Ldhc6OSPRm7X8znPXjXLvLWWko5I9GbtfzHPXjXJy1lpKOSPRm7X8xz141yctZaSjkj0Zu1/Mc9eNcnLWWko5I9GbtfzHPXjXJy1lpKOSPRm7X8xz141yctZaSjkj0Zu1/Mc9eNcnLWWko5I9GbtfzHPXjXJy1lpKOSPRm7X8xz141yctZaWtpYxIcsitYkyI96ImZEcqTH6WzmZoiZyhHrjdVMPifb5AAFZa77RjVG8RJ2vgp6t9wxVNhkJSAAAAAAAAAEVbIyECu7hK2yMdXRhv2GEKXUwAAYXCdHst6US1rURsfAiIifZQcWwxTs+7z68Pef20c1a5/hmlUt8/2YPIeXXfT3n9nN2uf4KVS3z/Zg8h5dd9Pef2c3a5/gpVLfP9mDyHl13095/Zzdrn+ClUt8/wBmDyHl13095/Zzdrn+ClUt8/2YPIeXXfT3n9nN2uf4KVS3z/Zg8h5dd9Pef2c3a5/gpVLfP9mDyHl13095/Zzdrn+ClUt8/wBmDyHl13095/Zzdrn+ClUt8/2YPIeXXbT3n9nN2uf4ePEesSIrnrhVVVVzqqzmyI3Ruh4TO+d7AcAAFZa77RjVG8RJ2vgp6t9wxVNhkJSAAAAAAAAAETbIyECu7hK+yMdXRhv2GEKXUwAAYVZkAtoXQiG+G1VlDsKIuTbm/MiVbWqiZjgj7qUXGmYxOVBYeku3beZ8+b16I+5yFOooLD0l27bzHm9eiPuchTqKCw9Jdu28x5vXoj7nIU6igsPSXbtvMeb16I+5yFOooLD0l27bzHm9eiPuchTqKCw9Jdu28x5vXoj7nIU6igsPSXbtvMeb16I+5yFOooLD0l27bzHm9eiPuchTqKCw9Jdu28x5vXoj7nIU6kZKIfUyh7EWe5c5s+eZVSf9i3RVxUxOadVG6Zh8z6cAAFZa67RjVG8RI2vgp6t9wxVNiEJSAAAAAAAAAETbIyECu7hK+yMdXRhv+GEKXUwAAYVJ0AsYfTi4hon+LiREy+qqRp2Rvnfx9vlvi/7ow9/hyp38L8x9Jzyf39vl3n/b3+CnfwvzH0jyf39vk5/29/gp38L8x9I8n9/b5Of9vf4Kd/C/MfSPJ/f2+Tn/AG9/gp38L8x9I8n9/b5Of9vf4Kd/C/MfSPJ/f2+Tn/b3+CnfwvzH0jyf39vk5/29/gp38L8x9I8n9/b5Of8Ab3+CnfwvzH0jyf39vk5/29/hIyiJ10oe+aa6c500+KdVWb9yxRTw0xGTBVO+Zl8z6cAAFZa67RjVG8RI2vgp6t9wxVNiEJSAAAAAAAAAETbIyECu7hK+yMdXRhv+GEKXUwAAYVZkDj3mdEZY9iKjGTKiKn2rTBO0rvE7t8/Zqi52rlQ+WeBm9ac8zu+c/Z3k7X/Ch8s8DN60eZ3fOfscna/4UPlngZvWjzO75z9jk7X/AAofLPAzetHmd3zn7HJ2v+PnH6KSuBBc+I1ty1rnLNFbPMiTr/B9U7RsKqopiZ9f8cm6WsRvl4huZgAAAAAAACstddoxqjeIkbXwU9W64YqmxCEpgAAAAAAAACJtk5CBXdwlfZGOrow3/DCELyYAAMOwoHGyYPSqRNgtR0fCjWov2MbHN+R+Zq2deJmZ4e8ftYi92W76/lzpXIvP9mNyOeXXnT3j9u83Y5/kpXIvP9mNyHl15094/Zzdjn+Slci8/wBmNyHl15094/Zzdjn+Slci8/2Y3IeXXnT3j9nN2Of5deyHSeRxpBGZDjTudDiNanVRcKq1URMKHpZbPvFNpTM0/SY/uHzXerKaZiJ/LXh+jSQAAAAAAACttc9oxqjeIj7XwU9W64YqmxCEpgAAAAAAAACJtk5CBXdwlfZGOrowX/DCELyYAAAAAAAAAAAAAAAAAAABW2ue0Y1RvESNr4KerfcMVTYhBUwAAAAAAAABE2ychAru4SvsjHV0YL/hhBl5MAAAAAAAAAAAAAAAAAAAArrXPaMao3iJG18FPVvuGKpsQgqYAAAAAAAAAibZOQgV3cJX2Rjq6MF/wwgy8mAAAAAAAAAAAAAAAAAAAAVtrntGNUbxEja+Cnq33DFU2KQVMAAAAAAAAARFsnIQK7uEr7Ix1dGC/wCGOqELyYAAAAAAAAAAAAAAAAAAABW2ue0o1RvESNr4KerfcMVTYpBUwAAAAAAAABF2yWKskguTEj1n/Vq8itsiqPFqj/GG/R/CJ/1Al9LAAAAAAAAAAAAAAAAAAAAr7XDFWWxnd1yxP1nVf6I22Ko4aI6qFwj1qlsMhqQAAAAAAAAA8rpDIEl8hcx6YFT9UXOh6WNrVZVxXT9YfFpRFdM0y1fLrFRZHEVHsVW9zmoqov55j9NYX6xtY9J3TlKPaXa0on6b4zdO4XMuxTVxRm8eGci4XMuxRxRmcM5FwuZdijijM4ZyLhcy7FHFGZwzkXC5l2KOKMzhnIuFzLsUcUZnDORcLmXYo4ozOGci4XMuxRxRmcM5FwuZdijijM4ZyLhcy7FHFGZwzkXC5l2KOKMzhnIuFzLsUcUZnDORcLmXYo4ozOGci4XMuxRxRmcM5FwuZdijijM4ZyLhcy7FHFGZwzk7ElsfFlT0SExfzVJmoeFte7GyjfVV/wBf29LOwtK59IbJ6KWKSx0jRExrhcviXOfmrzeKre045/8AQsWNlFnTwwoDO9QAAAAAAAABhUukwgdCU2LbFWdAOreXWAvLrG4Ly6xuC8usbgvLrG4Ly6xuC8usbgvLrG4Ly6xuC8usbgvLrG4Ly6xuC8usbgvLrG4Ly6xuC8usbh95PYlsNZ3AeixqMSZoHIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/Z" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                </div>
                            </div>

                        @else

                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img
                                        src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        @if ($message->message_text != null)
                                        <p>
                                            <a href="{{url('deletmsg/'.$message->id)}}" >Delet</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="data:image/jpeg;base64,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" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                        @endif
                    @empty
                        <h5 style="text-align: center;color:red"> لاتوجد رسائل سابقة</h5>
                    @endforelse
                        @else
                        @php($i = 0)
                        @forelse ($messages as $message)

                        @if ($message->user->name == auth()->user()->name)
                            <!-- Reciever Message-->
                            <div class="outgoing_msg">
                                <div class="sent_msg rounded-10 rounded overflow-hidden pb-1" style="background-color:#d1d1d1">
                                    @if ($message->message_text != null)
                                    <p>
                                        <a href="{{url('deletmsg/'.$message->id)}}" >Delet</a>
                                        {{ $message->message_text }}


                                    </p>
                                    <span class="time_date m-1">
                                        {{ $message->created_at->diffForHumans() }}</span>
                                @elseif($message->message_file != null)
                                    <a href="..\chatfile\{{$message->message_file}}" download>
                                        <img src="data:image/jpeg;base64,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" />
                                        <div style='margin-left:40px'>{{$message->message_file}}</div>
                                    </a>
                                @endif
                                </div>
                            </div>



                            @if ( $message->created_at->diffForHumans()  == '3 seconds ago' || $message->created_at->diffForHumans()  == '2 seconds ago' || $message->created_at->diffForHumans()  == '1 seconds ago' || $message->created_at->diffForHumans()  == '4 seconds ago')
                                        <audio  id="audio2" src="..\audios\ms.mp3" autoplay ></audio>


                            @endif
                        @else
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img
                                        src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">

                                        @if ($message->message_text != null)
                                        <p>
                                            <a href="{{url('deletmsg/'.$message->id)}}" >Delet</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="data:image/jpeg;base64,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" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                        @endif
                    @empty
                        <h5 style="text-align: center;color:red"> لاتوجد رسائل سابقة</h5>
                    @endforelse
                        @endif


                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <form wire:submit.prevent="sendMessage" class="my-3 rounded-pill border border-1 px-2 py-0 d-flex position-relative" style="position:relative" onsubmit="play()" >
                                <input onkeydown='scrollDown()' wire:model.defer="messageText" type="text"
                                    class="write_msg h-100 m-0 p-2" placeholder="اكتب رسالتك" />
                                    <audio  id="audio" src="..\audios\whats.mp3"  ></audio>
                                    <button  class="msg_send_btn rounded-circle position-absolute top-0 right-0  border-0" style="position:absolute;top:0; background-color: #c1c1c1;width:45px;height:45px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
</svg></button>
                            </form>
                            <form action="{{url('sendfile')}}" method="POST" class="my-3 d-block d-flex" enctype="multipart/form-data">
                                @csrf
                                <label for="formFile" class="form-label">...</label>
                                <input onkeydown='scrollDown()' id="formFile" name="file"  type="file"
                                        class="write_msg form-control" placeholder="اكتب رسالتك"  required/>
                                        <input onkeydown='scrollDown()' name="rcv_id" value="{{$reciever}}" type="hidden"
                                        class="write_msg" placeholder="اكتب رسالتك" />

                                        <button style="background-color: green;margin-top:60px" class="msg_send_btn d-block m-0 position-relative bg-primary" type="submit">ارسال</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
    }
  </script>
