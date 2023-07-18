<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Focus</title>
    <link rel="shortcut icon" href="Element/Image/Logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="Element/Style/Style.css">
</head>

<body>
    <!-- NAVBARRE -->
    <div>
        <div id="Navbarre">
            <div class="Navbarre-logo"><img src="Element/Image/Logo-nom.svg" alt="Image"></div>
            <div class="Navbarre-max1000">
                <div class="text-navbarre" onclick="Page(this.innerHTML)">TDAH</div>
                <div class="text-navbarre" onclick="Page(this.innerHTML)">FocusFinder</div>
                <div class="text-navbarre" onclick="Page(this.innerHTML)">FocusAnalyzer</div>
                <div class="text-navbarre" onclick="Page(this.innerHTML)">Aide</div>
                <div id="text-navbarre-5" class="text-navbarre" onclick="Page(this.innerHTML)">Inscription</div>
            </div>
            <div class="Navbarre-min1000">
                <img src="Element/Image/Burger.svg" id="Image-burger" onclick="bouton_navbarre()" alt="Image">
            </div>
        </div>

        <div id="Navbarre-burger">
            <div class="text-navbarre" onclick="Page(this.innerHTML)">TDAH</div>
            <div class="text-navbarre" onclick="Page(this.innerHTML)">FocusFinder</div>
            <div class="text-navbarre" onclick="Page(this.innerHTML)">FocusAnalyzer</div>
            <div class="text-navbarre" onclick="Page(this.innerHTML)">Aide</div>
            <div id="text-navbarre-burger-5" class="text-navbarre" onclick="Page(this.innerHTML)">Inscription</div>
        </div>
    </div>

    <!-- Page TDAH -->
    <div id="Bloc-TDAH">
        <div class="Titre">
            <svg style="z-index: 40;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.964 719.729C118.822 729.17 0 663.667 0 663.667V964H1920V631.632C1920 631.632 1757.87 626.122 1657.37 647.649C1557.57 669.027 1455.62 710.92 1412.64 739.751C1358.92 775.791 1211.15 836.966 1074.4 831.854C991.7 828.761 948.57 802.461 867.482 785.803C770.722 765.924 716.069 756.799 618.777 739.751C493.938 717.877 422.714 662.741 298.446 687.694C258.443 695.726 239.478 714.957 198.964 719.729Z" fill="#120E16" />
            </svg>
            <svg style="z-index: 30;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 298C63.4711 323.845 118.53 363.98 202.314 377.522C283.464 390.639 330.873 358.422 412.562 367.582C568.336 385.049 627.761 491.226 779.504 530.603C959.779 577.383 1072.33 524.99 1255.54 558.436C1372.17 579.729 1430.97 625.851 1549.09 635.97C1694.6 648.436 1910.08 588.257 1920 588.257V964H0V298Z" fill="#211120" />
            </svg>
            <svg style="z-index: 20;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1707 219C1787.2 198.435 1920 198 1920 198V964H0V454C82.6667 463.333 165.388 475.948 272 482C403.785 489.482 479.123 499.164 610 482C759.031 462.456 832.093 402.749 980 376C1072.86 359.207 1126.25 358.733 1220 348C1331.66 335.217 1414.67 327.333 1506 316C1597.33 304.667 1618.5 241.694 1707 219Z" fill="#351A39" />
            </svg>
            <svg style="z-index: 10;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 302.506C0 302.506 81.6628 245.88 127.734 202.28C174.561 157.964 172.214 80.4673 236.507 77.9994C286.745 76.071 306.011 115.628 345.281 147.156C380.584 175.499 389.553 204.651 428.108 228.339C470.905 254.633 501.845 255.641 550.852 266.425C593.922 275.902 606.736 282.461 662.62 282.461C718.503 282.461 776.001 263.037 844.241 282.461C882.161 293.254 897.232 317.701 936.05 324.556C987.413 333.628 1018.47 319.577 1067.78 302.506C1145.23 275.687 1163.3 209.06 1241.41 184.239C1272.46 174.376 1280.27 184.47 1307.28 166.198C1327.97 152.195 1331.88 135.731 1354.18 128.113C1384.45 117.772 1403.42 146.096 1435.01 141.142C1504.04 130.314 1478.1 -12.071 1546.78 0.825081C1584.59 7.92573 1590.72 42.3736 1622.62 63.9676C1670.9 96.6489 1706.65 99.3368 1757.34 128.113C1806.55 156.051 1797.53 187.614 1878.09 208.294C1894.58 212.527 1920 220.321 1920 220.321V964H0V302.506Z" fill="#7A4D68" />
            </svg>
            <h1 id="Titre-TDAH">TDAH</h1>
        </div>
        <div class="Contenue">
            <div class="Contenue-Bloc" class="Contenue-Bloc-droit">
                <img class="Contenue-Bloc-image" src="Element/Image/questions.svg" alt="Image">
                <div>
                    <h2 class="Contenue-h2">C'est quoi la TDAH ?</h2>
                    <p class="Contenue-p">Le Trouble du Déficit de l'Attention avec ou sans Hyperactivité (TDAH) est un trouble neurologique qui touche principalement les enfants et les adolescents, bien que certains adultes puissent également en souffrir. Les personnes atteintes de TDAH ont des difficultés à se concentrer sur une tâche donnée pendant de longues périodes de temps et peuvent être impulsives et hyperactives.</p>
                </div>
            </div>
            <div class="Contenue-Bloc" class="Contenue-Bloc-gauche">
                <div>
                    <h2 class="Contenue-h2">Les symptomes ?</h2>
                    <p class="Contenue-p">Les symptômes du TDAH peuvent varier d'une personne à l'autre, mais comprennent généralement une difficulté à rester concentré, une tendance à être distrait, une impulsivité, une difficulté à suivre les instructions, une désorganisation et une agitation. Les personnes atteintes de TDAH peuvent également avoir des difficultés dans les relations sociales et peuvent souffrir de faible estime de soi.</p>
                </div>
                <img class="Contenue-Bloc-image" src="Element/Image/children.svg" alt="Image">
            </div>
            <div class="Contenue-Bloc" class="Contenue-Bloc-droit">
                <img class="Contenue-Bloc-image" src="Element/Image/Statistics.svg" alt="Image">
                <div>
                    <h2 class="Contenue-h2">Statistiques</h2>
                    <div>
                        <p class="Contenue-h3-rouge">5,9%</p>
                        <p class="Contenue-h3-blanc"> des enfants</p>
                    </div>
                    <div>
                        <p class="Contenue-h3-rouge">2,5%</p>
                        <p class="Contenue-h3-blanc"> des adultes</p>
                    </div>
                    <div>
                        <p class="Contenue-h3-rouge">+ 41Millions</p>
                        <p class="Contenue-h3-blanc"> de cas</p>
                    </div>
                </div>
            </div>
            <div class="Contenue-Bloc" class="Contenue-Bloc-gauche">
                <div>
                    <h2 class="Contenue-h2">Besoin d'aide ?</h2>
                    <p class="Contenue-p">Il existe une liste de professionnels spécialisés pour vous aider si vous avez besoin de soutien pour gérer des difficultés liées à la TDAH. Composée de psychologue, de psychiatre, d’orthophoniste et d'autres professionnels de la santé mentale. N'hésitez pas à chercher de l'aide si vous en avez besoin, car demander de l'aide est un signe de force, pas de faiblesse.</p>
                </div>
                <img class="Contenue-Bloc-image" src="Element/Image/medical.svg" alt="Image">
            </div>
            <div class="Contenue-Bloc" class="Contenue-Bloc-droit">
                <img class="Contenue-Bloc-image" src="Element/Image/working.svg" alt="Image">
                <div>
                    <h2 class="Contenue-h2">Notre mission</h2>
                    <p class="Contenue-p">Il existe une liste de professionnels spécialisés pour vous aider si vous avez besoin de soutien pour gérer des difficultés liées à la TDAH. Composée de psychologue, de psychiatre, d’orthophoniste et d'autres professionnels de la santé mentale. N'hésitez pas à chercher de l'aide si vous en avez besoin, car demander de l'aide est un signe de force, pas de faiblesse.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page FocusFinder -->
    <div id="Bloc-FocusFinder">
        <div class="Titre">
            <svg style="z-index: 40;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.964 719.729C118.822 729.17 0 663.667 0 663.667V964H1920V631.632C1920 631.632 1757.87 626.122 1657.37 647.649C1557.57 669.027 1455.62 710.92 1412.64 739.751C1358.92 775.791 1211.15 836.966 1074.4 831.854C991.7 828.761 948.57 802.461 867.482 785.803C770.722 765.924 716.069 756.799 618.777 739.751C493.938 717.877 422.714 662.741 298.446 687.694C258.443 695.726 239.478 714.957 198.964 719.729Z" fill="#0F160E" />
            </svg>
            <svg style="z-index: 30;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 298C63.4711 323.845 118.53 363.98 202.314 377.522C283.464 390.639 330.873 358.422 412.562 367.582C568.336 385.049 627.761 491.226 779.504 530.603C959.779 577.383 1072.33 524.99 1255.54 558.436C1372.17 579.729 1430.97 625.851 1549.09 635.97C1694.6 648.436 1910.08 588.257 1920 588.257V964H0V298Z" fill="#132111" />
            </svg>
            <svg style="z-index: 20;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1707 219C1787.2 198.435 1920 198 1920 198V964H0V454C82.6667 463.333 165.388 475.948 272 482C403.785 489.482 479.123 499.164 610 482C759.031 462.456 832.093 402.749 980 376C1072.86 359.207 1126.25 358.733 1220 348C1331.66 335.217 1414.67 327.333 1506 316C1597.33 304.667 1618.5 241.694 1707 219Z" fill="#22391A" />
            </svg>
            <svg style="z-index: 10;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 302.506C0 302.506 81.6628 245.88 127.734 202.28C174.561 157.964 172.214 80.4673 236.507 77.9994C286.745 76.071 306.011 115.628 345.281 147.156C380.584 175.499 389.553 204.651 428.108 228.339C470.905 254.633 501.845 255.641 550.852 266.425C593.922 275.902 606.736 282.461 662.62 282.461C718.503 282.461 776.001 263.037 844.241 282.461C882.161 293.254 897.232 317.701 936.05 324.556C987.413 333.628 1018.47 319.577 1067.78 302.506C1145.23 275.687 1163.3 209.06 1241.41 184.239C1272.46 174.376 1280.27 184.47 1307.28 166.198C1327.97 152.195 1331.88 135.731 1354.18 128.113C1384.45 117.772 1403.42 146.096 1435.01 141.142C1504.04 130.314 1478.1 -12.071 1546.78 0.825081C1584.59 7.92573 1590.72 42.3736 1622.62 63.9676C1670.9 96.6489 1706.65 99.3368 1757.34 128.113C1806.55 156.051 1797.53 187.614 1878.09 208.294C1894.58 212.527 1920 220.321 1920 220.321V964H0V302.506Z" fill="#637A4D" />
            </svg>
        </div>
        <div class="Contenue-rectangle">
            <div class="Fond-rectangle">
                <div class="Text-rectangle">
                    <h2 class="Titre-rectangle">FocusFinder</h2>
                    <p class="Paragraphe-rectangle">Vous pensez peut-être que votre cerveau fonctionne différemment de celui des autres, mais vous n'êtes pas sûr si cela relève vraiment du TDAH ? Faites ce test pour obtenir des pistes de réflexion et pour mieux comprendre vos forces et vos faiblesses.</p>
                    <button class="Bouton-rectangle" onclick="FocusFinder_test()">Faire le teste</button>
                </div>
                <img class="Image-rectangle" src="Element/Image/Test.svg" alt="Image">
            </div>
        </div>
    </div>

    <!-- Page FocusAnalyzer -->
    <div id="Bloc-FocusAnalyzer">
        <div class="Titre">
            <svg style="z-index: 40;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.964 719.729C118.822 729.17 0 663.667 0 663.667V964H1920V631.632C1920 631.632 1757.87 626.122 1657.37 647.649C1557.57 669.027 1455.62 710.92 1412.64 739.751C1358.92 775.791 1211.15 836.966 1074.4 831.854C991.7 828.761 948.57 802.461 867.482 785.803C770.722 765.924 716.069 756.799 618.777 739.751C493.938 717.877 422.714 662.741 298.446 687.694C258.443 695.726 239.478 714.957 198.964 719.729Z" fill="#250F02" />
            </svg>
            <svg style="z-index: 30;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 298C63.4711 323.845 118.53 363.98 202.314 377.522C283.464 390.639 330.873 358.422 412.562 367.582C568.336 385.049 627.761 491.226 779.504 530.603C959.779 577.383 1072.33 524.99 1255.54 558.436C1372.17 579.729 1430.97 625.851 1549.09 635.97C1694.6 648.436 1910.08 588.257 1920 588.257V964H0V298Z" fill="#3F2302" />
            </svg>
            <svg style="z-index: 20;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1707 219C1787.2 198.435 1920 198 1920 198V964H0V454C82.6667 463.333 165.388 475.948 272 482C403.785 489.482 479.123 499.164 610 482C759.031 462.456 832.093 402.749 980 376C1072.86 359.207 1126.25 358.733 1220 348C1331.66 335.217 1414.67 327.333 1506 316C1597.33 304.667 1618.5 241.694 1707 219Z" fill="#4E3505" />
            </svg>
            <svg style="z-index: 10;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 302.506C0 302.506 81.6628 245.88 127.734 202.28C174.561 157.964 172.214 80.4673 236.507 77.9994C286.745 76.071 306.011 115.628 345.281 147.156C380.584 175.499 389.553 204.651 428.108 228.339C470.905 254.633 501.845 255.641 550.852 266.425C593.922 275.902 606.736 282.461 662.62 282.461C718.503 282.461 776.001 263.037 844.241 282.461C882.161 293.254 897.232 317.701 936.05 324.556C987.413 333.628 1018.47 319.577 1067.78 302.506C1145.23 275.687 1163.3 209.06 1241.41 184.239C1272.46 174.376 1280.27 184.47 1307.28 166.198C1327.97 152.195 1331.88 135.731 1354.18 128.113C1384.45 117.772 1403.42 146.096 1435.01 141.142C1504.04 130.314 1478.1 -12.071 1546.78 0.825081C1584.59 7.92573 1590.72 42.3736 1622.62 63.9676C1670.9 96.6489 1706.65 99.3368 1757.34 128.113C1806.55 156.051 1797.53 187.614 1878.09 208.294C1894.58 212.527 1920 220.321 1920 220.321V964H0V302.506Z" fill="#856104" />
            </svg>
        </div>
        <div class="Contenue-rectangle">
            <div class="Fond-rectangle" style="flex-direction: row-reverse;">
                <div class="Text-rectangle">
                    <h2 class="Titre-rectangle">FocusAnalyzer</h2>
                    <p class="Paragraphe-rectangle">Optimisez le suivi de vos patients atteints de TDAH grâce à FocusAnalyzer, le logiciel qui vous permet de mieux comprendre leurs résultats de tests. Offrez leur une prise en charge personnalisée et efficace pour les aider à gérer leur trouble avec succès. Contactez-nous pour en savoir plus.</p>
                    <button class="Bouton-rectangle" onclick="contacter()">Nous contacter</button>
                </div>
                <img class="Image-rectangle" src="Element/Image/Professionnelle.svg" alt="Image">
            </div>
        </div>
    </div>

    <!-- Page Aide -->
    <div id="Bloc-Aide">
        <div class="Titre">
            <svg style="z-index: 40;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.964 719.729C118.822 729.17 0 663.667 0 663.667V964H1920V631.632C1920 631.632 1757.87 626.122 1657.37 647.649C1557.57 669.027 1455.62 710.92 1412.64 739.751C1358.92 775.791 1211.15 836.966 1074.4 831.854C991.7 828.761 948.57 802.461 867.482 785.803C770.722 765.924 716.069 756.799 618.777 739.751C493.938 717.877 422.714 662.741 298.446 687.694C258.443 695.726 239.478 714.957 198.964 719.729Z" fill="#0E0E16" />
            </svg>
            <svg style="z-index: 30;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 298C63.4711 323.845 118.53 363.98 202.314 377.522C283.464 390.639 330.873 358.422 412.562 367.582C568.336 385.049 627.761 491.226 779.504 530.603C959.779 577.383 1072.33 524.99 1255.54 558.436C1372.17 579.729 1430.97 625.851 1549.09 635.97C1694.6 648.436 1910.08 588.257 1920 588.257V964H0V298Z" fill="#111121" />
            </svg>
            <svg style="z-index: 20;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1707 219C1787.2 198.435 1920 198 1920 198V964H0V454C82.6667 463.333 165.388 475.948 272 482C403.785 489.482 479.123 499.164 610 482C759.031 462.456 832.093 402.749 980 376C1072.86 359.207 1126.25 358.733 1220 348C1331.66 335.217 1414.67 327.333 1506 316C1597.33 304.667 1618.5 241.694 1707 219Z" fill="#1A1D39" />
            </svg>
            <svg style="z-index: 10;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 302.506C0 302.506 81.6628 245.88 127.734 202.28C174.561 157.964 172.214 80.4673 236.507 77.9994C286.745 76.071 306.011 115.628 345.281 147.156C380.584 175.499 389.553 204.651 428.108 228.339C470.905 254.633 501.845 255.641 550.852 266.425C593.922 275.902 606.736 282.461 662.62 282.461C718.503 282.461 776.001 263.037 844.241 282.461C882.161 293.254 897.232 317.701 936.05 324.556C987.413 333.628 1018.47 319.577 1067.78 302.506C1145.23 275.687 1163.3 209.06 1241.41 184.239C1272.46 174.376 1280.27 184.47 1307.28 166.198C1327.97 152.195 1331.88 135.731 1354.18 128.113C1384.45 117.772 1403.42 146.096 1435.01 141.142C1504.04 130.314 1478.1 -12.071 1546.78 0.825081C1584.59 7.92573 1590.72 42.3736 1622.62 63.9676C1670.9 96.6489 1706.65 99.3368 1757.34 128.113C1806.55 156.051 1797.53 187.614 1878.09 208.294C1894.58 212.527 1920 220.321 1920 220.321V964H0V302.506Z" fill="#4D4F7A" />
            </svg>
            <h1 id="Titre-Aide">Aide</h1>
        </div>
        <div class="Contenue">
            <div class="Contenue-Bloc-no" class="Contenue-Bloc-droit">
                <img class="Contenue-Bloc-image" src="Element/Image/liste.svg" alt="Image">
                <div>
                    <h2 class="Contenue-h2">Besoin de conseil</h2>
                    <p class="Contenue-p">Si vous ressentez le besoin d'aide ou de conseils professionnels pour faire face à
                        vos difficultés liées au TDAH. Voici une liste de professionnels spécialisés prêts à vous
                        accompagner. Parmi eux, des psychologues, des psychiatres, des orthophonistes et d'autres experts de
                        la santé mentale. N'hésitez pas à les contacte pour obtenir un soutien adapté à vos besoins. La
                        liste est composé de leur nom, leur numéro de téléphone et E-Mail. Rappelez-vous que demander de
                        l'aide est un signe de force et non de faiblesse.</p>
                </div>
            </div>
            <div class="Aide-bouton">
                <div class="Bouton-refresh" onclick="Afficher_utilisateurs(document.getElementById('select-filtre').value)">
                    <div>Réactualiser</div>
                    <img id="Bouton-refresh-img" src="Element/Image/refresh.svg" alt="Image">
                </div>
                <div class="Bouton-filtre">
                    <div>Filtre</div>
                    <select id="select-filtre" class="Input-inscription" onchange="Afficher_utilisateurs(this.value)">
                        <option value="Tout">Tout</option>
                        <option value="Psychiatre">Psychiatre</option>
                        <option value="Psychologue">Psychologue</option>
                        <option value="Neurologue">Neurologue</option>
                        <option value="Pédiatre">Pédiatre</option>
                        <option value="Généraliste">Généraliste</option>
                        <option value="Therapeute">Therapeute</option>
                        <option value="Orthophoniste">Orthophoniste</option>
                        <option value="Ergothérapeute">Ergothérapeute</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>
            <div id="Liste"></div>
            <script>
                var Rotate_refresh = 0;

                function Afficher_utilisateurs(Filtre_utilisateur) {
                    Rotate_refresh -= 180;
                    document.getElementById('Bouton-refresh-img').style.transform = "rotate(" + Rotate_refresh + "deg)";

                    var url = "Element/DB/afficher_utilisateurs.php?filtre=" + Filtre_utilisateur;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("Liste").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", url, true);
                    xhttp.send();
                }

                Afficher_utilisateurs('Tout');
            </script>
        </div>
    </div>


    <!-- Page Inscription -->
    <div id="Bloc-Inscription">
        <div class="Titre">
            <svg style="z-index: 40;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.964 719.729C118.822 729.17 0 663.667 0 663.667V964H1920V631.632C1920 631.632 1757.87 626.122 1657.37 647.649C1557.57 669.027 1455.62 710.92 1412.64 739.751C1358.92 775.791 1211.15 836.966 1074.4 831.854C991.7 828.761 948.57 802.461 867.482 785.803C770.722 765.924 716.069 756.799 618.777 739.751C493.938 717.877 422.714 662.741 298.446 687.694C258.443 695.726 239.478 714.957 198.964 719.729Z" fill="#1D0101" />
            </svg>
            <svg style="z-index: 30;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 298C63.4711 323.845 118.53 363.98 202.314 377.522C283.464 390.639 330.873 358.422 412.562 367.582C568.336 385.049 627.761 491.226 779.504 530.603C959.779 577.383 1072.33 524.99 1255.54 558.436C1372.17 579.729 1430.97 625.851 1549.09 635.97C1694.6 648.436 1910.08 588.257 1920 588.257V964H0V298Z" fill="#330202" />
            </svg>
            <svg style="z-index: 20;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1707 219C1787.2 198.435 1920 198 1920 198V964H0V454C82.6667 463.333 165.388 475.948 272 482C403.785 489.482 479.123 499.164 610 482C759.031 462.456 832.093 402.749 980 376C1072.86 359.207 1126.25 358.733 1220 348C1331.66 335.217 1414.67 327.333 1506 316C1597.33 304.667 1618.5 241.694 1707 219Z" fill="#4D0F0F" />
            </svg>
            <svg style="z-index: 10;" viewBox="0 0 1920 964" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 302.506C0 302.506 81.6628 245.88 127.734 202.28C174.561 157.964 172.214 80.4673 236.507 77.9994C286.745 76.071 306.011 115.628 345.281 147.156C380.584 175.499 389.553 204.651 428.108 228.339C470.905 254.633 501.845 255.641 550.852 266.425C593.922 275.902 606.736 282.461 662.62 282.461C718.503 282.461 776.001 263.037 844.241 282.461C882.161 293.254 897.232 317.701 936.05 324.556C987.413 333.628 1018.47 319.577 1067.78 302.506C1145.23 275.687 1163.3 209.06 1241.41 184.239C1272.46 174.376 1280.27 184.47 1307.28 166.198C1327.97 152.195 1331.88 135.731 1354.18 128.113C1384.45 117.772 1403.42 146.096 1435.01 141.142C1504.04 130.314 1478.1 -12.071 1546.78 0.825081C1584.59 7.92573 1590.72 42.3736 1622.62 63.9676C1670.9 96.6489 1706.65 99.3368 1757.34 128.113C1806.55 156.051 1797.53 187.614 1878.09 208.294C1894.58 212.527 1920 220.321 1920 220.321V964H0V302.506Z" fill="#853333" />
            </svg>
        </div>
        <div class="Contenue-inscription">
            <div id="Partie-Inscription">
                <div class="Fond-inscription">
                    <h2 class="Titre-inscription">Bienvenue</h2>
                    <div id="Formulaire-1" class="Formulaire-inscription">
                        <p class="Paragraphe-inscription">Pour ne rien perdre de vos donnée, inscrivez vous à l'aide de vos informations personnelles.</p>
                        <div class="Input-inscription-div">
                            <div class="Input-inscription-double">
                                <input id="Input-formulaire-1" class="Input-inscription" type="text" placeholder="Nom" maxlength="32" oninput="Test_imput(1)">
                                <input id="Input-formulaire-2" class="Input-inscription" type="text" placeholder="Prénom" maxlength="32" oninput="Test_imput(1)">
                            </div>
                            <div class="Input-verification-email">
                                <input id="Input-formulaire-3" class="Input-inscription" type="email" placeholder="E-Mail" oninput="Test_imput(1)">
                                <img id="Input-formulaire-3-image" src="Element/Image/X.svg" alt="Image">
                            </div>
                        </div>
                        <p class="Etape-inscription">Étape 1 sur 3 </p>
                        <div>
                            <button class="Bouton-inscription" onclick="Element(1)">Connexion</button>
                            <button id="Bouton-inscription-1" class="Bouton-inscription" onclick="Element(2)" style="color: #940b0b;">Suivant</button>
                        </div>
                    </div>

                    <div id="Formulaire-2" class="Formulaire-inscription">
                        <p class="Paragraphe-inscription">Quelques petites informations sur vous pour mieux vous connaître.</p>
                        <div class="Input-inscription-div">
                            <div class="Input-inscription-double">
                                <input id="Input-formulaire-4" class="Input-inscription" type="text" placeholder="Age" maxlength="3" oninput="Test_imput(2)">
                                <select id="Input-formulaire-5" class="Input-inscription">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Non-binaire">Non-binaire</option>
                                </select>
                            </div>
                            <select id="Input-formulaire-6" class="Input-inscription" style="width: 40%;">
                                <option value="Il">Il</option>
                                <option value="Elle">Elle</option>
                                <option value="Iel">Iel</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                        <p class="Etape-inscription">Étape 2 sur 3 </p>
                        <div>
                            <button class="Bouton-inscription" onclick="Element(3)">Retour</button>
                            <button id="Bouton-inscription-2" class="Bouton-inscription" onclick="Element(4)" style="color: #940b0b;">Suivant</button>
                        </div>
                    </div>

                    <div id="Formulaire-3" class="Formulaire-inscription">
                        <p class="Paragraphe-inscription">Le mot de passe pour rester sécurisée à tout moment.</p>
                        <div class="Input-inscription-div">
                            <div class="Input-MDP">
                                <img class="Input-MDP-image" id="Affiche_MDP_1" onclick="Affiche_MDP('Input-formulaire-7', event)" src="Element/Image/oeil-2.svg" alt="Image">
                                <input id="Input-formulaire-7" class="Input-inscription" type="password" placeholder="Mot de passe" oninput="Test_et_MDP(3, 'MDP-ligne-inscription', this.value)">
                            </div>
                            <div class="MDP-div">
                                <div id="MDP-ligne-inscription" class="MDP-ligne"></div>
                                <div class="MDP-fond"></div>
                            </div>
                            <div class="Input-MDP">
                                <img class="Input-MDP-image" id="Affiche_MDP_2" onclick="Affiche_MDP('Input-formulaire-8', event)" src="Element/Image/oeil-2.svg" alt="Image">
                                <input id="Input-formulaire-8" class="Input-inscription" type="password" placeholder="Confirmer" oninput="Test_imput(3)">
                            </div>
                        </div>
                        <p class="Etape-inscription">Étape 3 sur 3 </p>
                        <div>
                            <button class="Bouton-inscription" onclick="Element(5)">Retour</button>
                            <button id="Bouton-inscription-3" class="Bouton-inscription" onclick="Element(6)" style="color: #940b0b;">Inscription</button>
                        </div>
                    </div>

                    <div id="Formulaire-0" class="Formulaire-inscription">
                        <p class="Paragraphe-inscription">Pour ne rien perdre de vos donnée, connectez vous à l'aide de vos informations personnelles.</p>
                        <div class="Input-inscription-div">
                            <input id="Input-formulaire-9" class="Input-inscription" type="email" placeholder="E-Mail" oninput="Test_imput(0)">
                            <div class="Input-MDP">
                                <img class="Input-MDP-image" id="Affiche_MDP_3" onclick="Affiche_MDP('Input-formulaire-10', event)" src="Element/Image/oeil-2.svg" alt="Image">
                                <input id="Input-formulaire-10" class="Input-inscription" type="password" placeholder="Mot de passe" oninput="Test_imput(0)">
                            </div>
                        </div>
                        <div>
                            <button class="Bouton-inscription" onclick="Element(7)">Inscription</button>
                            <button id="Bouton-inscription-0" class="Bouton-inscription" onclick="Element(8)" style="color: #940b0b;">Connexion</button>
                        </div>
                    </div>
                    <h1 id="Message-inscription"></h1>
                </div>
                <script>
                    function Verifier_compte(email, mdp) {
                        if (email != "" && mdp != "") {
                            var xhttp = new XMLHttpRequest(); // requete HTTP POST pour tester des information dans un script PHP
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    var response = JSON.parse(this.responseText);
                                    if (response.success == true) {
                                        document.getElementById('Formulaire-0').style.display = "none";
                                        document.getElementById('Message-inscription').style.display = "flex";
                                        document.getElementById('Message-inscription').innerHTML = "Bonjour " + response.prenom + " " + response.nom + "<br><div id='Message-inscription-div' onclick='Profil()'>Voir profil</div>";
                                        
                                        connexion = true; // Utilisateur connecter => Vrai
                                        valeur_compte[0] = email; // Information du compte
                                        valeur_compte[1] = mdp;
                                        valeur_connexion = []; // Vide les donnée de connecion
                                    } else if (response.success == false) {
                                        Erreur("Soupirant", "L'email ou le mot de passe est incorrect. Peut-être que vous n'etez pas encore inscrit ?");
                                    } else {
                                        Erreur("Choque", "Une erreur s'est produite lors de la lecture de la réponse. Il est possible que vous utilisiez des caractères spéciaux");
                                    }
                                }
                            };
                            xhttp.open("GET", "Element/DB/Verifier_compte.php?email=" + encodeURIComponent(email) + "&mdp=" + encodeURIComponent(mdp), true);
                            xhttp.send();
                        }
                    }

                    function Inscrire_compte(email, nom, prenom, age, sexe, pronom, mdp) {
                        if (email != "" && nom != "" && prenom != "" && age != "" && sexe != "" && pronom != "" && mdp != "") {
                            var xhttp = new XMLHttpRequest(); // requete HTTP POST pour tester des information dans un script PHP
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    var response = JSON.parse(this.responseText);
                                    if (response.inscription == true) {
                                        document.getElementById('Formulaire-3').style.display = "none";
                                        document.getElementById('Message-inscription').style.display = "flex";
                                        document.getElementById('Message-inscription').innerHTML = "Bonjour " + prenom + " " + nom + "<br><div id='Message-inscription-div' onclick='Profil()'>Voir profil</div>";
                                        
                                        connexion = true; // Utilisateur connecter => Vrai
                                        valeur_compte[0] = email; // Information du compte
                                        valeur_compte[1] = mdp;
                                        valeur_inscription = []; // Vide les donnée d'inscription
                                    } else {
                                        Erreur("Choque", "Une erreur s'est produite lors de l'inscription'");
                                    }
                                }
                            };
                            xhttp.open("GET", "Element/DB/Inscription.php?email=" + encodeURIComponent(email) + "&nom=" + encodeURIComponent(nom) + "&prenom=" + encodeURIComponent(prenom) + "&age=" + encodeURIComponent(age) + "&sexe=" + encodeURIComponent(sexe) + "&pronom=" + encodeURIComponent(pronom) + "&mdp=" + encodeURIComponent(mdp), true);
                            xhttp.send();
                        }
                    }
                </script>
            </div>
            <div id="Partie-Profil">
                <div class="Font-profil">
                    <div class="Profil-partie1">
                        <h1>Profil</h1>
                        <img src="Element/Image/pp.svg" alt="Image">
                        <span class="Profil-ligne"></span>
                        <div>
                            <h2 class="Profil-Text1" id="Profil-nom">Roi lion</h2>
                            <div class="Profil-div2">
                                <div class="Profil-Text2-div">
                                    <p class="Profil-Text2">Age</p>
                                    <p class="Profil-Text2-reponse"></p>
                                </div>
                                <div class="Profil-Text2-div">
                                    <p class="Profil-Text2">Type</p>
                                    <p class="Profil-Text2-reponse"></p>
                                </div>
                            </div>
                            <div class="Profil-div2">
                                <div class="Profil-Text2-div">
                                    <p class="Profil-Text2">Sexe</p>
                                    <p class="Profil-Text2-reponse"></p>
                                </div>
                                <div class="Profil-Text2-div">
                                    <p class="Profil-Text2">Pronom</p>
                                    <p class="Profil-Text2-reponse"></p>
                                </div>
                            </div>
                            <div class="Profil-Text2-div">
                                <p class="Profil-Text2">Date inscription</p>
                                <p class="Profil-Text2-reponse"></p>
                            </div>
                        </div>
                    </div>
                    <div class="Profil-partie2">
                        <h1>Information</h1>
                        <div>
                            <div class="Profil-partie2-information">
                                <div class="Profil-Text3-div">
                                    <p class="Profil-Text3">Adresse email</p>
                                    <p class="Profil-Text3-reponse"></p>
                                </div>
                                <div class="Profil-Text3-div">
                                    <p class="Profil-Text3">Mot de passe</p>
                                    <p class="Profil-Text3-reponse"></p>
                                </div>
                            </div>
                            <canvas class="Profil-partie2-graphique">
    
                            </canvas>
                        </div>
                        <div class="Profil-partie2-stat">
                            <div class="Profil-Text4-div">
                                <p class="Profil-Text4">Nombre de test</p>
                                <p class="Profil-Text4-reponse"></p>
                            </div>
                            <div class="Profil-Text4-div">
                                <p class="Profil-Text4">Score moyen</p>
                                <p class="Profil-Text4-reponse"></p>
                            </div>
                            <div class="Profil-Text4-div">
                                <p class="Profil-Text4">TDAH</p>
                                <p class="Profil-Text4-reponse"></p>
                            </div>
                        </div>
                    </div>
                    <img src="Element/Image/Exit.svg" alt="Image" onclick="Exit_profil()">
                </div>
            </div>
        </div>
    </div>

    <!-- Erreur -->
    <div id="erreur" class="erreur">
        <p id="erreur-message"></p>
        <img id="erreur-image" alt="Image">
    </div>

    <!-- Chargement -->
    <!-- <div id="Chargement">

    </div> -->

    <script src="Element/JS/Style.js"></script>
    <script src="Element/JS/Inscription.js"></script>
    <script src="Element/JS/Page.js"></script>
    <script src="Element/JS/Autre.js"></script>
</body>

</html>