---
title: "Redovisningar"
...


##Kmom01

**Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.**

Jag tyckte att PHP The Right Way var mycket nyttig att läsa. Dock var det mycket och jag skummade igenom en hel del, men jag kommer definitivt komma tillbaka till den. Jag känner att jag har börjat lära mig mycket om PHP, men
det finns alltid så mycket mer att lära sig. Som i alla språk finns det alltid något man kan förbättra och hitta bättre lösningar på. Detta är något jag vill bli bättre på, att finna smartare lösninar på problem. En av mina styrkor är att jag lär mig väldigt snabbt, även fast jag inte ännu är klar med kursen OOPHP har jag redan tagit med mig mycket från den kursen som jag kan ta med mig in i denna kursen och förbättra. En av mina svagheter är att jag tycker att jag använder för mycket "basic" kod. Jag vill lära mig mer avancerad kod, vilket vi har börjat jobba med, för att mer efektivt lösa vissa problem.

**Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?**

<img class="meImg" src="cimage/img.php?src=frameworks.png&width=620" alt="PHP ramverk graf">

Jag använde mig av en artikel på  [Sitepoint](https://www.sitepoint.com/the-state-of-php-mvc-frameworks-in-2017/) där jag kunde se att laravel verkar vara det mest populära ramverket. Dock erhåller artikeln, och även andra källor som [coderseye](https://coderseye.com/best-php-frameworks-for-web-developers/) att ramverk som CakePHP och Symphony också är väldigt poppulära.

**Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.**

Jag använder mig främst av Stack-overflow när det gäller communities inom programmering, och självklart även dbwebb's forum. Jag tycker forum kan vara mycket nyttiga när man söker information och en simplifierad förklaring av något. Dock kan det finns många olika synvinklar och inget tydligt "rätt". Därför gillar jag hur Stack-overflow använder ett system så man kan se vilka svar fått mest uppröster(och därmed kanske är mest relevant?) och även tillåter skaparen av tråden att välja ett "rätt" svar. Detta är kanske något jag saknar lite på dbwebb, men samtidigt är ju vårat forum lite mer stängt och kanske inte behöver något sådant.

**Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?**

Jag har alltid tyckt att arbeta utan ramverk tillåter en större frihet. Dock kan det vara svårt i stora projekt att starta helt från grunden. Ramverk tillåter även en simplifiering av att skapa till exempel en hemsida, vilket kanske passar vissa personer eller tillfällen bättre. Jag tror inte vi kommer undan ramverk, men jag tycker att det finns studer då de inte behövs.

**Hur gick dina förberedelser inför kommentarssystemet?**

Jag tänkte mycket på hur jag har arbetat i kursen OOPHP. Det finns mycket erfarenhet jag kan ta med mig från den, även fast jag inte hunnit avsluta den helt. Det finns många saker jag vill förbättra och göra annorlunda, vilket kommer hjälpa mig när jag ska göra ett kommentarssystem.


##Kmom02

**Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?**

Jag har inte använt MVC innan. Jag använde mig av artikeln och Wikipedia mestadels för
att lära mig. Jag älskar att arbeta med MVC nu när jag förstår det. Det är så enkelt
att pussla ihop funktionalitet när man har fristående modeller, och kan använda sig
av en Controller för att länka samman allt. Det anser jag vara den största fördelen.

**Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?**

Jag använde mig främst av Wikipedia men såg även på videon. Dock var den ganska komplicerad
ibland, men jag fick ändå lite ut av den. Det finns mång principer som har med SOLID att göra.
Att skriva SOLID kod betyder att man skriver kod som är lätt att underhålla och expandera
är den främsta meningen. Kod/klasser ska ha ett jobb, och inte flera. Det ska gå lätt
att utöka kod, vilket kan förknippas med modellerna i MVC, men färdig kod ska inte behöva
ändras. Kod ska heller inte behöva implementera saker som den inte använder. Det är ganska
mycket att ta i, men allt som allt ska koden vara lätt att arbeta med.

**Gick arbetet med REM servern bra och lyckades du integrera den i din me-sida?**

Det gick mycket bra. Det var en väl skriven artikel. Jag hade inte några problem
med att integrera den i min sida.


**Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?**

Jag tycker det har gått mycket bra. Jag har gjort backend(MVC) för hantering med en databas,
viket jag är mycket nöjd med. Allt är gjort med CRUD, och jag är mycket nöjd med hur jag skrivit
hela databasdelen. Liknande databashanteringen har jag MVC för att hantera själva kommentarerna.
Just nu har jag ingen front end, men all back end fungerar perfekt!

##Kmom03

**Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?**

Det kändes smidigt! Hade lite svårt att förstå hur man skulle göra, men tycker att det är
mycket mer efektivt nu när jag lärt mig.

**Hur känns det att göra dig av med beroendet till $app, blir $di bättre?**

Det kändes lite kladdigt att använda $app, speciellt när det började bli fler och fler
services. $di är lite enklare att läsa, då det mesta sköts i configs, och det är mycket
smidigare på grund av lazy loading.

**Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?**

Tyckte defenitivt att Dependency Injection är den bästa förbättringen såhär långt. Mycket renare
och förståeligare kodstruktur.

**Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?**

Japp, det var inte särskillt svårt när jag hade förstått hur det fungerade. Arbetade främst med
databasen och inte så mycket med styling eller utskrift av kommentarerna. Just nu hämtar jag
bara allt och gör en var_dump, men allt finns redo för nästa kursmoment.

**Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?**

Jag har löst allt angående CRUD för databasen med hjälp av en databasmodell och controller.
Har gjort mycket av liknande grejer så det var inte så klurigt att lösa.

**Allmänna kommentarer kring din me-sida och dess kodstruktur?**

Tycker att det är en ganska överkomplicerad lösning för något så pass "simpelt". Det blir ganska
kladdigt och det är många kall fram och tillbaka.
Dock känner jag nog så främst för att man är tvungen att ändra mycket fram och tillbaka
genom de olika kursmomenten. DI har gjort allt lite mindre rörigt, men allt är inte helt
hur jag skulle vilja ha det.

##Kmom04

**Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?**

Jag hade gjort en egen databashantering för att hantera kommentarssystemet, dock fick jag slopa det
eftersom det blev för mycket svårigheter att få det att fungera med allt annat som man scaffoldar.
Jag valde därför att implementera Anax-databasen och active record, vilket gick lätt.

Formulärhantering var ganska smidigt när man väl lärt sig och efter ett par stycken gick det snabbt
att skapa nya. Dock var det lite krångligt om man ville ändra något annat än värden och input-typer
i formuläret, men det var inget jag behövde göra så mycket.

**Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?**

Det gjorde det smidigt att implementera databashantering i flera olika moduler så som book,
comment och user. Att bara kunna skicka in en databas och använda save() var rätt smidigt.
Dock är ju problemet med sådana upplägg alltid att om man behöver göra något som inte finns
inbyggt blir det lite krångligt.

**Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?**

Jag gillar hur de olika modulerna är separata och finns under src-mappen, även fast de kanske är beroende
av varandra. Det bästa med att sköta all(eller näst intill) funktionalitet i modeller/controlers är
att vyerna blir *mycket* enklare att arbeta med. Det känns riktigt skönt att slippa ha massa kod i vyerna
som bara är i vägen.

**Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record.
Du kanske har erfarenhet av likande upplägg i andra sammanhang?**

*Inte tillräckligt insatt för att kunna ge något svar.*

**Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?**

Jag tror att det finns bra användingsområden för scaffolding, men samtidigt finns det en del problem.
Scaffolding är bra om man behöver göra många enkla och snabba saker som bara behöver lite konfigurering
för att fungera. Ska man sätta upp en hemsida för någon liten tjänst är det smidigt att inte behöva börja
från grunden. Dock brister det såklart när man behöver göra mer avancerade saker som inte finns inbyggt i
den scaffoldade strukturen. Men som sagt, det finns defenitivt flera användingsområden.

##Kmom05

**Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?**

Det var lite klurigt först. Det svåra var att komma på exakt vad som behövdes för helheten.
Det tog några försök men tillslut klarade jag det!

**Flöt det på bra med GitHub och kopplingen till Packagist?**

Japp det var inga problem.

**Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?**

Jag gjorde kursmomentet lite baklänges och började med att sätta in den utbrytna modulen
i me-sidan innan jag testade på ett helt nytt scaffoldat projekt. Blev lite knöligt och
jag vet inte riktigt varför jag gjorde så. Men när jag väl fått det att fungera både
på ett nytt scaffoldat projekt fungerade allt som det skulle även i me-sidan.

**Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?**

Det var lite konstigt hur man var tvungen att mocka DI för att få det att fungera.
Jag valde även att använda sqlite som databas för testerna då jag tyckte det var
en smidigare miljö för tester. Jag skrev bara ett test för att visa att jag fått
PHPUnit att funka, så brydde mig inte riktigt om kodtäckning.

Jag hade lite problem med att XDebug tydligen inte var isntallerat och att min
konfigurationsfil för PHP inte laddades. Dock lyckades jag lösa det med utan allt
för stora problem, och jag lärde mig en hel del på vägen. Var kul att se att jag
har ganska bra koll på linuxterminalen.

**Några reflektioner över skillnaden med och utan modul?**

Jag har länge varit en fanboy av moduler och tycker det är mycket smidigt att bryta
ut funktionalitet. Det gör ens kodbas tydligare och tillåter modulen användas i andra
projekt.

##Kmom06

**Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?**

Yep! Jag har gjort det i flera tidigare kurser och har även hållt på med det
i lite olika fritidsprojekt. Både angående tester samt CI.

**Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?**

Det kan vara tidskrävande att sätta upp en CI, men när man väl har strukturen är det
väldigt smidigt. Har man ett lite större projekt tycker jag defenitvt det är värt.
Enhetstester är viktiga för att vara säker att ett system fungerar hela vägen genom
utvecklingsprocessen och även efteråt, jag skulle klassa det som nödvändigt så fort
projektet är mer än ett litet script.

**Hur stor kodtäckning lyckades du uppnå i din modul?**

Fattar inte riktigt det. Jag får ut 0% av scrutenizer men inte av phpunit själv, dock
förstår jag inte hur man ser en totalsumma där. Grejen är att all min SRC-kod(i stort sätt)
bara genererar vyer. Funktionaliteten är inte så utbryten i funktioner som faktist returnera
något, vilket skulle gått att testa. Visst, comment och user använder ARM, men vad är poängen
med att testa det? Då ska väl snarare sagt ARM ha sina egna enhetstester.

Hur som helst gjorde jag 5 tester som testade lite allt möjligt, och nu vill jag
bara komma vidare till projektet.

**Berätta hur det gick att integrera mot de olika externa tjänsterna?**

Konfigurationsfilerna är alltid lite störiga att jobba med. Ibland tror man att man
har gjort rätt, men man måste pusha nya ändringar och sedan vänta för att se om
allt faktiskt fungerade..vilket det inte alltid gjorde. Fick göra en hög med massa
"fösrök1..försök2"-commits, men fick det att fungera tillslut.

**Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?**

Travis är en av mina favoriter. Lätt att sätta upp(i vanliga fall) och enkelt att
konfigurera. Dock gillade jag scrutenizer, det är säkert något jag kan kolla mer på
i framtiden.
