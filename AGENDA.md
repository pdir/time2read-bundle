
# Agenda // Workshop / Time2Read Bundle-Entwicklung

# Vorwort

In dem Workshop wollen wir gemeinsam die Grundlagen der Contao 4 Bundle-Entwicklung
am Beispiel einer Time2Read Erweiterung erarbeiten. Das Bundle soll eine Funktion bereitstellen,
welche die benötigte geschätzte Lesezeit pro Seite/Element/News automatisch im Frontend ausgeben kann.

## Schwerpunkte:

- Grundlegendes Setup eines Bundles (Vorlage ist das Contao 4 Skeleton Bundle)
- Schrittweise Entwicklung der eigenen Funktion und Integration in Contao
- Fertigstellung des Bundles und dessen Veröffentlichung
- Einspielen eines Updates für das Bundle (Versionierung)

## Vorbereitung:

Bitte bereitet euch auf den Workshop vor, indem ihr:
- eure lokale Entwicklungsumgebung einrichtet.
    - Jeder kann die Tools seiner Wahl verwenden. Wichtig wäre, dass ihr damit problemlos Code schreiben und diesen ggf. in das git Repo committen könnt.
    - Contao 4.9 auf einem lokalen oder Web-Server installieren: https://contao.org/de/download.html
- einen git Account anlegt und dem Bundle-Repository https://github.com/pdir/time2read-bundle beitretet.
    - Klickt dazu bitte auf "Watch" oder "Star", damit euch Mathias hinzufügen kann. 
    - Während des Workshops wird jeder seinen eigenen Branch nutzen. Diesen nennt ihr gleich zu eurem Vornamen und committet ihn unter feature. Beispiel: feature/conny
- das Contao 4 Skeleton Bundle https://github.com/contao/skeleton-bundle auscheckt.
    - Ladet euch das Bundle runter und führt die unter "Customize" beschriebenen Schritte aus.
    - Verwendet als neuen Namen "Pdir\TimeToReadBundle" in allen Klassen und Namespaces.
    - Hinweis: der Schritt ist optional. Ihr könnt auch ein bereits für unseren Workshop angepasstest Skeleton Bundle nutzen. Dieses findet ihr ab Donnerstag im Master-Branch von https://github.com/pdir/time2read-bundle.

# 1. Erste Version 

- Vendor- und Bundle-Namen wählen
- Ordnerstruktur eines Contao Bundles
- Git Repository anlegen
- Das Skeleton Bundle verwenden und anpassen
- Bundle in die Entwicklungsumgebung installieren
- Funktionalitäten implementieren
    - Textelement um neue gewünschte Funktion erweitern
        - Welches Script soll zum berechnen eingesetzt werden
        - Wie soll die Ausgabe aussehen (Design/Layout entwerfen)
        - Checkbox zum de-/aktivieren
        - Eingabe der Lesegeschwindigkeit
    
- Veröffentlichung des neuen Bundles
    - Wie mache ich die Versionierung
    - Logo bereitstellen oder Vendor Logo verwenden
    - Readme bereitstellen
    - Bei packagist.org registrieren
    - Metadaten für Manager bereitstellen
    - Alle Teilnehmer in Readme aufnehmen

# 2. Zweite Version

- Akkordeons unterstützen    
- Eine neue Version veröffentlichen    

# 3. Dritte Version

- News Elemente unterstützen (Liste, Details)    
- Eine neue Version veröffentlichen    
