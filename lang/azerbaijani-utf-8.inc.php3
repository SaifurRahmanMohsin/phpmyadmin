<?php
/* $Id$ */

// tercümedeki eksiklerimi ve ya sehv olduğunu düşündüyünüz yerleri shehriyari@trcomm.net adresine göndere bilersiniz...
// Şehriyar İmanov 30 Avqust 2003... Shehi

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bayt', 'KB', 'MB', 'QB', 'TB', 'PB', 'EB');

$day_of_week = array('Baz', 'Baz Ert', 'Çerş Axş', 'Çerş', 'Cüme Axş', 'Cüme', 'Şen');
$month = array('Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyun', 'İyul', 'Avq', 'Sent', 'Okt', 'Noy', 'Dek');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y saat %I:%M %p';
$timespanfmt = '%s gün, %s saat, %s deqiqe ve %s saniye';

$strAPrimaryKey = '%s üzerine Birinci Dereceli Açar elave edildi.';
$strAbortedClients = 'Dayandırıldı';
$strAbsolutePathToDocSqlDir = 'Xahiş edirik, docSQL direktoriyasına webserver-deki mütleq yolu (absolute path) gösterin.';
$strAccessDenied = 'Giriş Tesdiq Edilmedi';
$strAction = 'Fealiyyetler';
$strAddDeleteColumn = 'Sahe Sütunlarını Elave Et/Sil';
$strAddDeleteRow = 'Kriteria Setirlerini Elave Et/Sil';
$strAddNewField = 'Yeni sahe elave et';
$strAddPriv = 'Yeni selahiyyet elave et';
$strAddPrivMessage = 'Yeni selahiyyet müeyyen etdiniz.';
$strAddPrivilegesOnDb = 'Aşağıdakı me\'lumat bazası üçün selahiyyet müeyyen et';
$strAddPrivilegesOnTbl = 'Aşağıdakı cedvel üçün selahiyyetler müeyyen et';
$strAddSearchConditions = 'Axtarış şertlerini gir ("where" ifadesinin esas metni):';
$strAddToIndex = 'İndekse &nbsp;%s&nbsp;sütun elave et';
$strAddUser = 'Yeni İstifadeçi Elave Et';
$strAddUserMessage = 'Yeni istifadeçi elave etdiniz.';
$strAddedColumnComment = 'Bu sütun üçün qısa izahat elave edildi';
$strAddedColumnRelation = 'Sütun üçün elaqe elave edildi';
$strAdministration = 'Administrasiya';
$strAffectedRows = 'Deyişen setir sayı:';
$strAfter = 'Sonra: %s';
$strAfterInsertBack = 'Evvelki sehifeye qayıt';
$strAfterInsertNewInsert = 'Teze bir setir daha gir';
$strAll = 'All';
$strAllTableSameWidth = 'eyni enli bütün Cedveller gösterilsinmi?';
$strAlterOrderBy = 'Cedvel sırasına buna göre yeniden qur';
$strAnIndex = '%s üzerine indeks elave edildi';
$strAnalyzeTable = 'Cedveli analiz et';
$strAnd = 'Ve';
$strAny = 'Her hansı';
$strAnyColumn = 'Her hansı sütun';
$strAnyDatabase = 'Her hansı baza';
$strAnyHost = 'Her hansı host';
$strAnyTable = 'Her hansı cedvel';
$strAnyUser = 'Her hansı istifadeçi';
$strAscending = 'Artan sırada';
$strAtBeginningOfTable = 'Cedvelin başına';
$strAtEndOfTable = 'Cedvelin sonuna';
$strAttr = 'Xüsusiyyetler';
$strAutodetect = 'Avtomatik';
$strAutomaticLayout = 'Automatik şablon';

$strBack = 'Geri';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - deyişiklik etme';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = 'Bookmark-lanmış SQL sorğusu';
$strBookmarkThis = 'Bu SQL sorğusunu bookmark-la';
$strBookmarkView = 'Sadece göster';
$strBrowse = 'İçindekiler';
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.';
$strBzip = '"bzip"lenmiş';

$strCSVOptions = 'CSV variantları';
$strCannotLogin = 'MySQL server-e gire bilmirem';
$strCantLoad = '%s uzantısını (extension) yükleye bilmirem,<br />xahiş edirem PHP Konfiqurasiyanı gözden keçir.';
$strCantLoadMySQL = 'MySQL uzantısını (extension) yükleye bilmirem,<br />xahiş edirem PHP Konfiqurasiyanı gözden keçir.';
$strCantLoadRecodeIconv = 'Charset çevirmeleri üçün lazım olan iconv ve ya recode uzantılarını yükleye bilmirem; ya php-ni bu uzantıları istifade ede bilmesi üçün yeniden quraşdırın ya da phpMyAdmin-de charset çevirme xüsusiyyetini söndürün.';
$strCantRenameIdxToPrimary = 'İndeksi Birinci Dereceli (PRIMARY) olaraq yeniden adlandıra bilmirem!';
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';
$strCardinality = 'Cardinality';
$strCarriage = 'Carriage return: \\r';
$strChange = 'Deyişdir';
$strChangeCopyMode = 'Eyni selahiyyetlere sahib yeni istifadeçi qur ve ...';  
$strChangeCopyModeCopy = '... köhnesini saxla.';  
$strChangeCopyModeDeleteAndReload = ' ... istifadeçi cedvellerinden köhnesini sil ve ardından selahiyyetleri yeniden yükle.';  
$strChangeCopyModeJustDelete = ' ... istifadeçi cedvellerinden köhnesini sil.';  
$strChangeCopyModeRevoke = ' ... köhne istifadeçinin selahiyyetlerini elinden alaraq onu sil.';  
$strChangeCopyUser = 'Sistem Giriş Me\'lumatını Deyişdir / İstifadeçini Kopyala';  
$strChangeDisplay = 'Gösterilecek Saheni Seç';
$strChangePassword = 'Parolu Deyişdir';
$strCharset = 'Charset';
$strCharsetOfFile = 'Faylın Charset-i:';
$strCheckAll = 'Hamısını Seç';
$strCheckDbPriv = 'Me\'lumat Bazası Selahiyyetlerini Gözden Keçir';
$strCheckPrivs = 'Selahiyyetleri Gözden Keçir';
$strCheckPrivsLong = '&quot;%s&quot; bazası üçün selahiyyetleri gözden keçir.';
$strCheckTable = 'Cedveli yoxla';
$strChoosePage = 'Xahiş edirem, deyişdirilecek Sehifeni seç';
$strColComFeat = 'Sütun Qısa İzahatını Deyişdir';
$strColumn = 'Sütun';
$strColumnNames = 'Sütun adları';
$strColumnPrivileges = 'Sütunaxas Selahiyyetler';
$strCommand = 'Komanda';
$strComments = 'Qısa İzahatlar';
$strCompleteInserts = 'Tam girişli (complete inserts)';
$strCompression = 'Sıxışdırma';
$strConfigFileError = 'phpMyAdmin konfiqurasiya faylınızı oxuya bilmedi!<br />Bunun sebebi fayldakı parse error ya da faylın mövcud olmaması ola biler.<br />Xahiş edirem aşağıdakı link-i istifade ederek konfiqurasiya faylını çağırın ve aldığınız php xeta mesaj(lar)ını oxuyun. Bir çox halda ya tek dırnaq ya da nöqteli vergül eksikliyi vardır.<br />Eger boş sehife ile qarşılaşsanız, demek ki, her şey qaydasındadır.';
$strConfigureTableCoord = 'Xahiş edirem, %s cedveli üçün koordinatları yeniden müeyyen et.';
$strConfirm = 'Bunu heqiqeten etmek istediyinizden eminmisiniz?';
$strConnections = 'Rabiteler (Connections)';
$strCookiesRequired = 'Sisteme girebilmeniz üçün çerez faylları (cookie-ler) aktiv olmalıdır.';
$strCopyTable = 'Cedveli kopyala (me\'lumat bazası<b>.</b>cedvel):';
$strCopyTableOK = '%s cedveli %s - e kopyalandı.';
$strCopyTableSameNames = 'Cedveli eynisinin üzerine kopyalaya bilmerem!';
$strCouldNotKill = 'phpMyAdmin %s emeliyyat thread-ini öldüre (kill) bilmedi. Böyük ehtimal artıq söndürülmüşdür.';
$strCreate = 'Qur';
$strCreateIndex = '&nbsp;%s&nbsp;sütunda indeks yarat';
$strCreateIndexTopic = 'Yeni indeks qur';
$strCreateNewDatabase = 'Yeni me\'lumat bazası yarat';
$strCreateNewTable = '%s bazasında yeni cedvel qur';
$strCreatePage = 'Yeni Sehife qur';
$strCreatePdfFeat = 'PDF-lerin qurulması';
$strCriteria = 'Kriteriyalar';

$strDBComment = 'Baza qısa izahatı: ';
$strDBGContext = 'Metn (kontekst)';
$strDBGContextID = 'Kontekst Nömresi';
$strDBGHits = 'Hit-ler';
$strDBGLine = 'Setir';
$strDBGMaxTimeMs = 'Min müddet, ms';
$strDBGMinTimeMs = 'Max müddet, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Vaxt/Hit, ms';
$strDBGTotalTimeMs = 'Toplam müddet, ms';
$strData = 'Me\'lumat';
$strDataDict = 'Me\'lumat Lüğeti (Data Dictionary)';
$strDataOnly = 'Sadece me\'lumat';
$strDatabase = 'Me\'lumat Bazası ';
$strDatabaseHasBeenDropped = '%s bazası leğv edildi.';
$strDatabaseWildcard = 'Me\'lumat Bazası (wildcard-lara icaze var):';
$strDatabases = 'Me\'lumat bazaları';
$strDatabasesDropped = '%s baza müveffeqiyyetle leğv edildi.';
$strDatabasesStats = 'Me\'lumat Bazası Statistikaları';
$strDatabasesStatsDisable = 'Statistikaları Passivleşdir';
$strDatabasesStatsEnable = 'Statistikaları Aktivleşdir';
$strDatabasesStatsHeavyTraffic = 'Qeyd: Me\'lumat Bazası statistikalarını burada işe salmaqla webserver-le MySQL server arasında ağır neqliyyat (traffic) meydana getire bilersiniz.';
$strDbPrivileges = 'Me\'lumat Bazasına Mexsus Selahiyyetler';
$strDbSpecific = 'bazayaxas';  
$strDefault = 'Başlanğıc deyer';
$strDefaultValueHelp = 'Başlanğıc deyer girerken, sadece deyeri girin, ters kesr escape-leme ya da dırnaqdan istifade etmeyin, bu formatı te\'qib edin: a';
$strDelOld = 'Hal-hazırki sehifen artıq mövcud olmayan Cedvellere bağlıdır. Bu elaqelerin silinmesini istermisiniz?';
$strDelete = 'Sil';
$strDeleteAndFlush = 'Bütün istifadeçileri sil ve ardından selahiyyetleri yeniden yükle.';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur, amma selahiyyetlerin yeniden yüklenmesi zaman teleb ede biler.';
$strDeleteFailed = 'Silme Müveffeqiyyetsiz Oldu!';
$strDeleteUserMessage = '%s istifadeçisini sildiniz.';
$strDeleted = 'Setir silindi';
$strDeletedRows = 'Silinen setir sayı:';
$strDeleting = '%s silinir';
$strDescending = 'Azalan sırada';
$strDisabled = 'Söndürülüb';
$strDisplay = 'Göster';
$strDisplayFeat = 'Xüsusiyyetleri Göster';
$strDisplayOrder = 'Sıralama şekli:';
$strDisplayPDF = 'PDF sxemini göster';
$strDoAQuery = '"nümuneye göre sorğu" gönderin (xüsusi işare: "%")';
$strDoYouReally = 'Aşağıdakı sorğunu icra etdirmekten eminsiniz ';
$strDocu = 'Dokumentasiya';
$strDrop = 'Leğv et';
$strDropDB = '%s bazasını leğv et';
$strDropSelectedDatabases = 'Seçilmiş Me\'lumat Bazalarını Leğv Et';
$strDropTable = 'Cedveli leğv et';
$strDropUsersDb = 'İstifadeçilerle eyni adlı me\'lumat bazalarını leğv et.';
$strDumpComments = 'sütun izahatlarını daxili SQL qısa izahatları şeklinde elave et';
$strDumpSaved = 'Sxem %s faylına qeyd edildi.';
$strDumpXRows = '%s setri %s nömreli qeydden başlayaraq göster.';
$strDumpingData = 'Sxemi çıxarılan cedvel';
$strDynamic = 'dinamik';

$strEdit = 'Deyişdir';
$strEditPDFPages = 'PDF Sehifelerini Deyişdir';
$strEditPrivileges = 'Selahiyyetleri Deyişdir';
$strEffective = 'Effektiv';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş netice çoxluğu gönderdi (ye\'ni sıfır setir).';
$strEnabled = 'Enabled';
$strEnd = 'Son';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Qeyd: MySQL selahiyyet adları ingilis dilinde ifade edilmişdir ';
$strError = 'Xeta';
$strExplain = 'SQL-i İzah Et';
$strExport = 'Eksport';
$strExportToXML = 'XML formatında eksport et';
$strExtendedInserts = 'Genişletilmiş girişli (extended inserts)';
$strExtra = 'Elave Xüs.';

$strFailedAttempts = 'Uğursuz Cehdler';
$strField = 'Sahe';
$strFieldHasBeenDropped = '%s sahesi leğv edildi';
$strFields = 'Sahe sayı';
$strFieldsEmpty = ' Sahe sayğacı boşdur! ';
$strFieldsEnclosedBy = 'Saheler ehate edildiyi işare';
$strFieldsEscapedBy = 'Sahelerin escape edildiyi işare';
$strFieldsTerminatedBy = 'Sahelerin yox edildiyi (terminate) işare';
$strFileAlreadyExists = '%s faylı serverda onsuz da mövcuddur, ya faylın adını deyişdir ya da üzerine yazma variantlarını.';
$strFileCouldNotBeRead = 'Fayl oxuna bilmir';
$strFileNameTemplate = 'Fayl adı nomenklaturası';
$strFileNameTemplateHelp = '__DB__ ifadesini me\'lumat bazası adı, __TABLE__ ifadesini de cedvel adı ve %sher hansı strftime%s seçeneklerini de vaxt ifadeleri üçün istifade edin; fayl uzantısı avtomatik olaraq elave edilecekdir. Diger metnler olduğu kimi saxlanacaqdır.';
$strFileNameTemplateRemember = 'nomenklaturanı unutma';
$strFixed = 'fixed';
$strFlushPrivilegesNote = 'Qeyd: phpMyAdmin istifadeçi selahiyyetlerini birbaşa MySQL-in selahiyyetler cedvellerinden almaqdadır. Eger elle nizamlamalar edilmişse, bu cedvellerin içerisindekiler webserver-in istifade etdiklerinden ferqli ola biler. Bu halda, davam etmeden evvel, selahiyyetleri yeniden yüklemelisiniz.';
$strFlushTable = 'Cedveli flush-la ("FLUSH")';
$strFormEmpty = 'Formda eksik girilmiş deyer var!';
$strFormat = 'Format';
$strFullText = 'Tam Metnler (Full Text)';
$strFunction = 'Funksiya';

$strGenBy = 'Qurucu';
$strGenTime = 'Hazırlanma Vaxtı';
$strGeneralRelationFeat = 'Ümumi elaqe variantları';
$strGlobal = 'qlobal';  
$strGlobalPrivileges = 'Qlobal selahiyyetler';
$strGlobalValue = 'Qlobal deyer';
$strGo = 'Davam';
$strGrantOption = 'İcaze ver';
$strGrants = 'İznler';
$strGzip = '"gzip"lenmiş';

$strHasBeenAltered = 'deyişdirildi.';
$strHasBeenCreated = 'quruldu.';
$strHaveToShow = 'Gösterilmesi üçün en az bir sütun seçmelisiniz';
$strHome = 'Başlanğıc';
$strHomepageOfficial = 'phpMyAdmin Resmi İnternet Sehifesi';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Sehifesi';
$strHost = 'Host';
$strHostEmpty = 'Host adı boşdur!';

$strId = 'Nömre';
$strIdxFulltext = 'Tam metn (Fulltext)';
$strIfYouWish = 'Cedvelin sadece be\'zi sütunlarını yüklemek isteyirsinizse, saheleri aralarına vergül qoyaraq göster.';
$strIgnore = 'Diqqete Alma';
$strIgnoringFile = '%s Diqqete Almama (Ignore) faylı';
$strImportDocSQL = 'docSQL Fayllarını İmport Et';
$strImportFiles = 'Faylları import et';
$strImportFinished = 'İmport başa çatdı';
$strInUse = 'istifadede';
$strIndex = 'İndeks';
$strIndexHasBeenDropped = '%s indeksi leğv edildi';
$strIndexName = 'İndex adı&nbsp;:';
$strIndexType = 'İndex tipi&nbsp;:';
$strIndexes = 'Indeksler';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Konfiqurasiya faylınızda MySQL başlanğıc deyerleri (parolsuz root istifadeçisi) mövcuddur ki, bu da tehlükesizlik nöqteyi nezerinden e\'tibarlı deyildir.';
$strInsert = 'Elave et';
$strInsertAsNewRow = 'Yeni setir olaraq elave et';
$strInsertNewRow = 'Yeni setir elave et';
$strInsertTextfiles = 'Metn faylından cedvele me\'lumat gir';
$strInsertedRowId = 'Elave edilen setir nömresi (id):';
$strInsertedRows = 'Elave edilen setir sayı:';
$strInstructions = 'İnstruksiyalar';
$strInvalidName = '"%s" xüsusi ifadedir, baza/cedvel/sahe adlandırmasında istifade edile bilmez.';

$strJumpToDB = '&quot;%s&quot; me\'lumat bazasına keç.';
$strJustDelete = 'Sadece olaraq selahiyyet cedvellerindeki istifadeçileri sil.';
$strJustDeleteDescr = '&quot;Silinmiş&quot; istifadeçiler selahiyyetler yeniden yüklenene qeder server-e gire bilecekler.';

$strKeepPass = 'Parolu deyişdirme';
$strKeyname = 'Açar söz';
$strKill = 'Öldür (Kill)';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX variantları';
$strLandscape = 'Landşaft';
$strLength = 'Uzunluq';
$strLengthSet = 'Uzunluq/Deyerler*';
$strLimitNumRows = 'Sehife başına düşen setir sayı';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Setirler';
$strLinesTerminatedBy = 'Setir leğvedicisi (Lines terminated by)';
$strLinkNotFound = 'Link tapılmadı';
$strLinksTo = 'Links to';
$strLoadExplanation = 'En yaxşı metod başlanğıc deyer olaraq işaretlenmişdir; amma işlemezse onu deyişdire bilersiniz.';
$strLoadMethod = 'LOAD metodu';
$strLocalhost = 'Yerli';
$strLocationTextfile = 'metn faylınızın yolunu göster';
$strLogPassword = 'Parol:';
$strLogUsername = 'İstifadeçi Adı:';
$strLogin = 'Sisteme Giriş';
$strLoginInformation = 'Sisteme Giriş Me\'lumatı';
$strLogout = 'Sistemden Çıxış';

$strMIME_MIMEtype = 'MIME-tipi';
$strMIME_available_mime = 'Mövcud olan MIME-tipleri';
$strMIME_available_transform = 'Mövcud transformasiyalar';
$strMIME_description = 'Haqqında';
$strMIME_file = 'Fayl adı';
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';
$strMIME_transformation = 'Browser transformation';
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';
$strMIME_transformation_options = 'Transformasiya variantları';
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';
$strMissingBracket = 'Missing Bracket';
$strModifications = 'Modifications have been saved';
$strModify = 'Modify';
$strModifyIndexTopic = 'Modify an index';
$strMoreStatusVars = 'More status variables';
$strMoveTable = 'Cedveli daşı (me\'lumat bazası<b>.</b>cedvel):';
$strMoveTableOK = '%s cedveli %s - e daşınmışdır.';
$strMoveTableSameNames = 'Can\'t move table to same one!';
$strMustSelectFile = 'You should select file which you want to insert.';
$strMySQLCharset = 'MySQL charset';
$strMySQLReloaded = 'MySQL yeniden yüklendi.';
$strMySQLSaid = 'MySQL deyir: ';
$strMySQLServerProcess = 'MySQL %pma_s1%, %pma_s2% üzerinde %pma_s3% istifadeçisi olaraq işlemektedir';
$strMySQLShowProcess = 'Prosesleri göster';
$strMySQLShowStatus = 'MySQL runtime me\'lumatını göster';
$strMySQLShowVars = 'MySQL sistem deyişenlerini göster';

$strName = 'Adı';
$strNext = 'Sonrakı';
$strNo = 'Xeyir';
$strNoDatabases = 'Baza yoxdur';
$strNoDatabasesSelected = 'Heç bir baza seçilmemişdir.';
$strNoDescription = 'Haqqında me\'lumat (description) mövcud deyildir';
$strNoDropDatabases = '"DROP DATABASE" ifadeleri söndürülmüşdür (disabled).';
$strNoExplain = 'SQL İzah Et-i Keç';
$strNoFrames = 'phpMyAdmin <b>frame-destekli</b> görüntüleyicilerle (browser) daha yaxşı işleyir.';
$strNoIndex = 'İndeks te\'yin edilmedi!';
$strNoIndexPartsDefined = 'İndeks qisimleri te\'yin edilmedi!';
$strNoModification = 'Deyişiklik Yoxdur';
$strNoOptions = 'Bu formatın variantları yoxdur';
$strNoPassword = 'Parol Yoxdur';
$strNoPermission = 'Webserver-in %s faylını saxlama izni yoxdur.';
$strNoPhp = 'PHP Kodunu Gösterme';
$strNoPrivileges = 'Selahiyyet çatışmazlığı';
$strNoQuery = 'Sorğu te\'yin edilmedi!';
$strNoRights = 'Burada olma haqqınız yoxdur!';
$strNoSpace = '%s faylını saxlamaq üçün lazım olan yer çatışmır.';
$strNoTablesFound = 'Me\'lumat bazasında cedvel yoxdur.';
$strNoUsersFound = 'İstifadeçi(ler) tapılmadı.';
$strNoUsersSelected = 'İstifadeçi seçilmemişdir.';
$strNoValidateSQL = 'SQL Tesdiqlemeni (Validation) Keç';
$strNone = 'Heç biri';
$strNotNumber = 'Bu reqem deyildir!';
$strNotOK = 'Müveffeqiyyetsiz';
$strNotSet = '<b>%s</b> cedveli %s içerisinde ya <b>tapılmadı</b> ya da qurulmamışdır';
$strNotValidNumber = ' e\'tibarlı setir nömresi deyildir!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s uyğunluq tapıldı (<i>%s</i> cedvelinde)';
$strNumSearchResultsTotal = '<b>Cemi:</b> <i>%s</i> uyğunluq';
$strNumTables = 'Cedveller';

$strOK = 'Müveffeqiyyetle';
$strOftenQuotation = 'Often quotation marks. OPTIONALLY means that only char and varchar fields are enclosed by the "enclosed by"-character.';
$strOperations = 'Emeliyyatlar';
$strOptimizeTable = 'Cedveli optimallaşdır';
$strOptionalControls = 'Optional. Controls how to write or read special characters.';
$strOptionally = 'OPTIONALLY';
$strOptions = 'Variantlar';
$strOr = 'ya da';
$strOverhead = 'Aşma deyeri';
$strOverwriteExisting = 'Overwrite existing file(s)';

$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';
$strPHPVersion = 'PHP Versiyası';
$strPageNumber = 'Sehife Nömresi:';
$strPartialText = 'Qismi Metnler';
$strPassword = 'Parol';
$strPasswordChanged = '%s üçün parol müveffeqiyyetle deyişdirilmişdir.';
$strPasswordEmpty = 'Parol boşdur!';
$strPasswordNotSame = 'Giridiyiniz parollar eyni deyil!';
$strPdfDbSchema = '"%s" bazanın sxemi - Sehife %s';
$strPdfInvalidPageNum = 'Te\'yin edilmemiş PDF sehife nömresi!';
$strPdfInvalidTblName = '"%s" cedveli mövcud deyil!';
$strPdfNoTables = 'Cedvel yoxdur';
$strPerHour = 'saatda';
$strPerMinute = 'deqiqede';
$strPerSecond = 'saniyede';
$strPhp = 'PHP Kodunu Hazırla';
$strPmaDocumentation = 'phpMyAdmin dokumentasiyası (etraflı me\'lumat üçün)';
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!';
$strPortrait = 'Portret';
$strPos1 = 'Başla';
$strPrevious = 'Evvelki';
$strPrimary = 'Birinci Dereceli';
$strPrimaryKey = 'Birinci Dereceli Açar';
$strPrimaryKeyHasBeenDropped = 'Birinci dereceli açar leğv edildi';
$strPrimaryKeyName = 'Birinci dereceli açarın adı... (BİRİNCİ DERECELİ) PRIMARY olmalıdır!';
$strPrimaryKeyWarning = '("PRIMARY" sadece birinci dereceli açarın adı <b>olmalıdır</b>!)';
$strPrint = 'Çap et';
$strPrintView = 'Çap görüntüsü';
$strPrivDescAllPrivileges = 'GRANT-dan başqa bütün selahiyyetler daxildir.';
$strPrivDescAlter = 'Mövcud olan cedvellerin strukturunu deyişdirmeye icaze verir.';
$strPrivDescCreateDb = 'Yeni bazalar ve cedveller qurmağa icaze verir.';
$strPrivDescCreateTbl = 'Yeni cedveller qurmağa icaze verir.';
$strPrivDescCreateTmpTable = 'Keçici cedveller qurmağa icaze verir.';
$strPrivDescDelete = 'Me\'lumat silmeye icaze verir.';
$strPrivDescDropDb = 'Baza ve cedvel leğv etmeye icaze verir.';
$strPrivDescDropTbl = 'Cedvelleri leğv etmeye icaze verir.';
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.';
$strPrivDescFile = 'Allows importing data from and exporting data into files.';
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.';
$strPrivDescIndex = 'Allows creating and dropping indexes.';
$strPrivDescInsert = 'Allows inserting and replacing data.';
$strPrivDescLockTables = 'Allows locking tables for the current thread.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.';
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.';
$strPrivDescReferences = 'Has no effect in this MySQL version.';
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.';
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.';
$strPrivDescReplSlave = 'Needed for the replication slaves.';
$strPrivDescSelect = 'Allows reading data.';
$strPrivDescShowDb = 'Gives access to the complete list of databases.';
$strPrivDescShutdown = 'Allows shutting down the server.';
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.';
$strPrivDescUpdate = 'Allows changing data.';
$strPrivDescUsage = 'Selahiyyet te\'yin edilmedi.';
$strPrivileges = 'Selahiyyetler';
$strPrivilegesReloaded = 'The privileges were reloaded successfully.';
$strProcesslist = 'Proses siyahısı';
$strProperties = 'Xüsusiyyetler';
$strPutColNames = 'Put fields names at first row';

$strQBE = 'Sorğu';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Sorğu penceresi';
$strQueryFrameDebug = 'Debugging information';
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-tarixçesi';
$strQueryStatistics = '<b>Sorğu statistikası</b>: Açıldıqdan bu yana, bu servere %s sorğu gönderilmişdir.';
$strQueryTime = 'sorğu %01.4f saniyede icra edildi';
$strQueryType = 'Sorğu tipi';

$strReType = 'Re-type';
$strReceived = 'Received';
$strRecords = 'Qeydiyyat';
$strReferentialIntegrity = 'Check referential integrity:';
$strRelationNotWorking = 'Elaqelendirilmiş cedveller üçün nezerde tutulmuş be\'zi xüsusiyyetler passivleşdirilmişdir. Sebebini aydınlaşdırmaq üçün %sbax%s.';
$strRelationView = 'Relation view';
$strRelationalSchema = 'Relational schema';
$strRelations = 'Relations';
$strReloadFailed = 'MySQL reload failed.';
$strReloadMySQL = 'Reload MySQL';
$strReloadingThePrivileges = 'Reloading the privileges';
$strRememberReload = 'Remember to reload the server.';
$strRemoveSelectedUsers = 'Remove selected users';
$strRenameTable = 'Cedveli yeniden adlandır';
$strRenameTableOK = '%s cedveli %s olaraq yeniden adlandırılmışdır';
$strRepairTable = 'Cedveli te\'mir et';
$strReplace = 'Replace';
$strReplaceTable = 'Replace table data with file';
$strReset = 'Sıfırla';
$strResourceLimits = 'Resource limits';
$strRevoke = 'Revoke';
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.';
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.';
$strRevokeGrant = 'Revoke Grant';
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevokePriv = 'Revoke Privileges';
$strRowLength = 'Sıra uzunluğu';
$strRowSize = ' Sıra boyu ';
$strRows = 'Sıra sayı';
$strRowsFrom = 'setri göster; başlangıç qeydiyyat nömresi';
$strRowsModeFlippedHorizontal = 'üfüqi (tekrarlanan başlıqlar)';
$strRowsModeHorizontal = 'üfüqi';
$strRowsModeOptions = '%s rejimde, başlıqlar %s blokdan bir tekrar ederek';
$strRowsModeVertical = 'şaquli';
$strRowsStatistic = 'Sıra Statistikası';
$strRunQuery = 'Emri İcra Et';
$strRunSQLQuery = '%s Me\'lumat bazasına SQL sorğusu(-ları) gönder';
$strRunning = '%s üzerinde işlemektedir';

$strSQL = 'SQL';
$strSQLOptions = 'SQL variantları';
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';
$strSQLQuery = 'SQL sorğusu';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = 'Invalid Identifer';
$strSQPBugUnclosedQuote = 'Unclosed quote';
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';
$strSave = 'Qeyd Et';
$strSaveOnServer = 'Save on server in %s directory';
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';
$strSearch = 'Axtarış';
$strSearchFormTitle = 'Search in database';
$strSearchInTables = 'Inside table(s):';
$strSearchNeedle = 'Axtarmaq üçün söz(ler) ve ya deyer(ler) (wildcard: "%"):';
$strSearchOption1 = 'sözlerin en azından birini';
$strSearchOption2 = 'bütün sözleri';
$strSearchOption3 = 'tamamile eyni sözü';
$strSearchOption4 = 'requlyar ifade (regular expression) olaraq';
$strSearchResultsFor = '"<i>%s</i>" üçün axtarış neticeleri %s:';
$strSearchType = 'Tap:';
$strSelect = 'Seç';
$strSelectADb = 'Me\'lumat bazası seç';
$strSelectAll = 'Hamısını Seç';
$strSelectFields = 'Sahe seçin (en az birini):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Select Tables';
$strSend = 'Fayl olaraq qeyd et';
$strSent = 'Gönderildi';
$strServer = 'Server %s';
$strServerChoice = 'Server Seçimi';
$strServerStatus = 'Runtime Me\'lumatı';
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.';
$strServerTabProcesslist = 'Prosesler';
$strServerTabVariables = 'Deyişenler';
$strServerTrafficNotes = '<b>Server neqliyyatı</b>: Bu cedveller bu serverin açılışından beri elde edilen neqliyyatı göstermektedir.';
$strServerVars = 'Server deyişenleri ve variantları';
$strServerVersion = 'Server versiyası';
$strSessionValue = 'Sessiya deyeri';
$strSetEnumVal = 'Sahe tipi "enum" ve ya "set" ise, deyerleri bu formatda girin: \'a\',\'b\',\'c\'...<br />Eger bu deyerlerde ters-kesr ("\") ve ya tek dırnaq ("\'") istifade etmek isteyirsinizse, onları ters-kesrle escape-leyin (meselen \'\\\\xyz\' ve ya \'a\\\'b\').';
$strShow = 'Göster';
$strShowAll = 'Hamısını göster';
$strShowColor = 'Rengini göster';
$strShowCols = 'Sütunları göster';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowFullQueries = 'Emrleri Tam Olaraq Göster';
$strShowGrid = 'Show grid';
$strShowPHPInfo = 'PHP me\'lumatını göster';
$strShowTableDimension = 'Cedvellerin ölçülerini göster';
$strShowTables = 'Cedvelleri göster';
$strShowThisQuery = ' Bu sorğunu burada yene göster ';
$strShowingRecords = 'Gösterilen setirler';
$strSingly = '(tek-tek)';
$strSize = 'Boy';
$strSort = 'Sırala';
$strSpaceUsage = 'Yer istifadesi';
$strSplitWordsWithSpace = 'Sözler boşluq ifadesi (" ") ile ayrılmışdır.';
$strStatCheckTime = 'En son yoxlama';
$strStatCreateTime = 'Quruluş';
$strStatUpdateTime = 'En son yenilenme';
$strStatement = 'Variantlar';
$strStatus = 'Status';
$strStrucCSV = 'CSV verilenleri';
$strStrucData = 'Quruluş ve me\'lumat';
$strStrucDrop = '\'Cedveli leğv et\' elaveli';
$strStrucExcelCSV = 'Ms Excel verilenleri üçün CSV';
$strStrucOnly = 'Sadece quruluş';
$strStructPropose = 'Alternativ cedvel strukturu';
$strStructure = 'Quruluş';
$strSubmit = 'Submit';
$strSuccess = 'SQL sorğunuz müveffeqiyyetle icra edilmişdir';
$strSum = 'Cemi';
$strSwitchToTable = 'Kopyalanmış cedvele keç';

$strTable = 'Cedvel';
$strTableComments = 'Cedvel haqqında qısa izahat';
$strTableEmpty = 'Cedveli adı boşdur!';
$strTableHasBeenDropped = '%s cedveli leğv edildi';
$strTableHasBeenEmptied = '%s cedveli boşaldıldı';
$strTableHasBeenFlushed = '%s cedveli flush-landı';
$strTableMaintenance = 'Cedvel temizliyi';
$strTableOfContents = 'İçindekiler Cedveli';
$strTableStructure = 'Table structure for table';
$strTableType = 'Cedvel tipi';
$strTables = '%s cedvel';
$strTblPrivileges = 'Cedvelexas selahiyyetler';
$strTextAreaLength = ' Uzun olduğuna göre,<br /> bu sahedeki me\'lumatlar deyişdirilmeye biler ';
$strTheContent = 'The content of your file has been inserted.';
$strTheContents = 'The contents of the file replaces the contents of the selected table for rows with identical primary or unique key.';
$strTheTerminator = 'The terminator of the fields.';
$strThisHost = 'Bu Host';
$strThisNotDirectory = 'Bu direktoriya deyildi';
$strThreadSuccessfullyKilled = 'Thread %s uğurla söndürüldü (killed).';
$strTime = 'Müddet';
$strTotal = 'cemi';
$strTotalUC = 'Cemi';
$strTraffic = 'Neqliyyat';
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';
$strTruncateQueries = 'Truncate Shown Queries';
$strType = 'Tip';

$strUncheckAll = 'Heç Birini Seçme';
$strUnique = 'Unikal';
$strUnselectAll = 'Heç birini seçme';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfile = 'Profili yenile:';
$strUpdateProfileMessage = 'Profil yenilendi.';
$strUpdateQuery = 'Sorğunu Yenile';
$strUsage = 'Miqdar';
$strUseBackquotes = 'Cedvel ve sahe adlarını tek dırnaq arasına al';
$strUseHostTable = 'Use Host Table';
$strUseTables = 'Use Tables';
$strUseTextField = 'Use text field';
$strUser = 'İstifadeçi';
$strUserAlreadyExists = '%s istifadeçisi mövcuddur!';
$strUserEmpty = 'İstifadeçi adı boş qaldı!';
$strUserName = 'İstifadeçi adı';
$strUserNotFound = 'The selected user was not found in the privilege table.';
$strUserOverview = 'User overview';
$strUsers = 'Users';
$strUsersDeleted = 'The selected users have been deleted successfully.';
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  

$strValidateSQL = 'SQL Tesdiqle';
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.';
$strValue = 'Deyer';
$strVar = 'Deyişen';
$strViewDump = 'Cedvelin sxemini göster';
$strViewDumpDB = 'Me\'lumat bazasının sxemini göster';

$strWebServerUploadDirectory = 'web-server upload direktoriyası';
$strWebServerUploadDirectoryError = 'Upload işleri üçün te\'yin etdiyiniz direktoriya tapılmadı';
$strWelcome = '%s - (n)e Xoş Gelmişsiniz!';
$strWildcard = 'xüsusi işare';  
$strWithChecked = 'Seçilenleri:';
$strWritingCommentNotPossible = 'Qısa izahat yazılışı mümkün deyil';
$strWritingRelationNotPossible = 'Elaqe yazılışı mümkün deyil';
$strWrongUser = 'Yanlış istifadeçi adı ve ya parol. Giriş tesdiq edilmedi.';

$strXML = 'XML';

$strYes = 'Beli';

$strZeroRemovesTheLimit = 'Qeyd: Bu variantları 0 (sıfır)-a çevirmek hüdudu (limiti) qaldıracaq.';
$strZip = '"zip"lenmiş';

$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTableOptions = 'Table options';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strWestEuropean = 'West European';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strArabic = 'Arabic';  //to translate
$strRussian = 'Russian';  //to translate
$strUnknown = 'unknown';  //to translate
$strBaltic = 'Baltic';  //to translate
$strUnicode = 'Unicode';  //to translate
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strKorean = 'Korean';  //to translate
$strGreek = 'Greek';  //to translate
$strJapanese = 'Japanese';  //to translate
$strThai = 'Thai';  //to translate
$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgradeMySQL = 'You should upgrade to MySQL %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strLogServer = 'Server';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
?>
