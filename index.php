<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CoinCrowd</title>
    <style>
        @import url("program-style.css");
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,700,900" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- MAIN -->
    <!-- LOGO CONTAINER -->
    <header>
        <div class="logo">
            <img src="../images/logo.png" alt="logo">
        </div>
    </header>
    <div class="parallax">
        <div class="title animated fadeInDown">
            <h1>CoinCrowd Supporter Program</h1>
            <div class="call-container">
                    <span class="animated fadeInDown">1000 XCC per te!</span>
                    <p>Compila questo form <strong > solo </strong>  dopo aver inviato il tuo video nel nostro <a href="https://www.facebook.com/groups/893138227524295/">gruppo facebook</a></p>
                </div>
        </div>
    </div>
    <!-- FORM CONTAINER -->
    <main>

        <form id="sub-form" action="" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input id="name" type="text" class="field" name="name" placeholder="Nome e Cognome" required>
                    <!--<input id="surname" type="text" class="field" name="surname" placeholder="Cognome" required>-->
                    <input id="email" type="text" class="field" name="mail" placeholder="esempio@email.com" required>
                    <input id="address" type="text" class="field" name="address" placeholder="Indirizzo Ethereum" required>
                    <input id="link" type="text" class="field" name="link" placeholder="Link del video" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div >
                        <label class="control-label">Termini e condizioni</label>
                        <div class="terms">
                            <p>L’Utente autorizza CoinCrowd S.r.l. ad utilizzare il proprio ritratto/le riprese e registrazioni
                                audio/video (“Materiali”) della propria persona e degli ambienti, locali, oggetti e documenti
                                che vengono ripresi, anche in forma parziale e/o modificata o adattata, realizzate dall’Utente
                                o da persona da lui stesso delegata per scopi commerciali e promozionali.
                            </p>
                            <p>L’autorizzazione sopra specificata implica la concessione di una licenza non esclusiva, senza
                                limiti di durata e per tutto il mondo, trasferibile a terzi, per l’utilizzazione dei Materiali
                                e include i diritti di cui agli artt. 12 segg. della legge n. 633/1941, compresi a titolo
                                esemplificativo e non esaustivo: diritto di pubblicazione; diritto di riproduzione in qualunque
                                modo o forma; diritto di trascrizione, montaggio, adattamento, elaborazione e riduzione;
                                diritto di comunicazione e distribuzione al pubblico, comprendente i diritti di proiezione,
                                trasmissione e diffusione (a titolo puramente esemplificativo mediante iptv, terminali mobili,
                                voip, canali digitali, ecc.), anche in versione riassuntiva e/o ridotta, con qualsiasi mezzo
                                tecnico, diritto di conservare copia dei Materiali, anche in forma elettronica e su qualsiasi
                                supporto tecnologico noto o di futura invenzione per le finalità e nei limiti sopra definiti.
                                È in ogni caso esclusa qualunque utilizzazione del ritratto che possa arrecare pregiudizio
                                all’onore, alla reputazione o al decoro della persona ritratta, ripresa o registrata.
                            </p>
                            <p>L’utente dichiara altresì:
                                <ul>
                                    <li>di aver acquisito, di non aver trasferito a titolo esclusivo o, comunque, di aver riacquisito
                                        i diritti oggetto del presente atto e, pertanto, di poterne liberamente disporre
                                        nella misura necessaria a dare esecuzione allo stesso;
                                    </li>
                                    <li>di manlevare sostanzialmente e processualmente CoinCrowd S.r.l. e di mantenerlo indenne
                                        da ogni perdita, danno, responsabilità, costo o spesa, incluse le spese legali,
                                        derivanti da o in qualunque modo collegati a pretese o contestazioni di soggetti
                                        terzi, relativi all’utilizzazione dei Materiali in oggetto.
                                    </li>
                                </ul>
                            </p>
                            <p id="info">INFORMATIVA PRIVACY I dati personali della persona ritratta, ripresa o registrata verranno trattati,
                                anche con modalità in tutto o parzialmente automatizzate, per le sole finalità connesse
                                con l’esecuzione del presente Atto. Il conferimento dei dati personali da parte dell’Autore
                                è facoltativo, tuttavia l’eventuale rifiuto di conferire i dati renderà impossibile l’esecuzione
                                del presente Atto. I dati personali potranno essere oggetto di comunicazione a collaboratori
                                e fornitori di CoinCrowd S.r.l., nonché ad ogni soggetto al quale la normativa vigente prevede
                                debbano essere comunicati per il corretto adempimento degli obblighi connessi con l’esecuzione
                                del presente Atto e, in ogni caso, nei limiti in cui ciò sia strettamente necessario per
                                il conseguimento delle finalità sopra indicate. La persona ritratta potrà, in qualsiasi
                                momento, esercitare i diritti di cui all’art. 7 del d.lgs. n. 196/2003, richiedendo, tra
                                l’altro, la comunicazione in forma intelligibile dei dati, la cancellazione, l’aggiornamento,
                                la rettificazione, l’opposizione al trattamento, mediante comunicazione scritta da inviarsi
                                all’indirizzo mail del Titolare del trattamento staff@coincrowd.it.
                            </p>
                        </div>
                    </div>
                    <div class="checkbox" style="margin-top: 5px;">
                        <label>
                            <input type="checkbox" name="agree" value="agree" required/> Accetto i termini e le condizioni</label>
                    </div>
                </div>
            </div>
            <input id="send" type="submit" name="send" value="INVIA">
        </form>
    </main>
    <div class="parallax2">
        <div class="container-fluid call animated fadeInDown">
            <div class="row slideanim">
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <p style="padding-bottom:20px;">Non hai ancora partecipato alla ICO?</p>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-md">
                                <a target="_blank" href="https://www.coincrowd.it/en/ico/#">Acquista ora i tuoi primi token</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <p>Non sei ancora iscritto nel gruppo Facebook della community
                                <br> di CoinCrowd?</p>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-md">
                                <a target="_blank" href="https://www.facebook.com/groups/893138227524295/">Entra nel gruppo facebook</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        &#169 Copyright 2017
    </footer>

    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script src="program-firebase-script.js"></script>
</body>


</html>