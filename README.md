# Einfacher PHP Besucherzähler

Dieses kleine PHP-Skript ermöglicht das Zählen von Besuchern auf einer Website, indem es die Besucherzahl in einer Textdatei (count.txt) speichert. Dabei wird die Datei mittels flock() gesperrt, um Probleme bei gleichzeitigen Zugriffen (Race Conditions) zu vermeiden.

## Features

- Einfaches PHP-Skript, leicht in bestehende Websites integrierbar  
- Vermeidet Schreibkonflikte durch Datei-Sperre  
- Keine Datenbank notwendig, rein dateibasiert  
- Geeignet für kleine bis mittlere Websites und Blogs (z. B. HTMLy)

## Installation

1. Lade die Dateien `counter.php` und eine leere Datei `count.txt` auf deinen Webspace (z. B. Strato).  
2. Stelle sicher, dass `count.txt` beschreibbar ist (z. B. Dateiberechtigungen anpassen).  
3. Binde den Zähler per PHP in deine Website ein, z. B.:
<?php include('pfad/zu/counter.php'); ?>

4. Besuche deine Website und der Zähler zählt die Besucher automatisch hoch.

## Hinweise

- Die `count.txt` sollte idealerweise außerhalb des Webroots liegen oder per `.htaccess` geschützt werden, damit niemand die Datei direkt verändern kann.  
- Der Zähler zählt jeden Seitenaufruf, inklusive Bots und Reloads. Für differenzierte Zählungen müssten zusätzliche Mechanismen (Cookies, User-Agent-Filter) ergänzt werden.

## Lizenz

MIT License – siehe LICENSE-Datei.

---

**Dieses Projekt entstand im Rahmen meiner Erfahrungen mit PHP-Programmierung und Webentwicklung. Bei Fragen oder Verbesserungsvorschlägen freue ich mich über Issues und Pull Requests.**
