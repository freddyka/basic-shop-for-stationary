# Paperclip - Online Shop Demo

Ein E-Commerce-Projekt für Bürobedarf, entwickelt mit PHP, MySQL und Docker.

## 🚀 Sofort starten (1 Command!)

```bash
git clone <repository-url>
cd 
docker-compose up -d
```

**Das war's!** 🎉

## 🌐 Zugriff

- **Website:** http://localhost:8000
- **phpMyAdmin:** http://localhost:8081
- **Login:** `paperclip` / `demo123`

## ✨ Features

- 🛒 Vollständiger Warenkorb (Add, Edit, Remove)
- 📱 Responsive Design 
- 🗂️ 6 Produktkategorien (Paper, School, Shipping, Safety, Presentation, Writing Materials)
- 🔍 Kategorien-Filter
- 💳 Checkout-Prozess (Demo)
- 🐳 Docker-Ready - keine lokale Installation nötig

## 🛠 Alternative (ohne Docker)

**XAMPP/lokaler Server:**
1. Repository klonen
2. In `connection.php`: `$host = "localhost"` setzen  
3. Datenbank aus `mysql-init/paperclip_db.sql` importieren
4. Webserver starten

## 📋 Demo-Zugangsdaten

| Service | URL | Login | Passwort |
|---------|-----|-------|----------|
| Website | http://localhost:8000 | - | - |
| phpMyAdmin | http://localhost:8081 | `paperclip` | `demo123` |
| MySQL | localhost:3310 | `paperclip` | `demo123` |

## 🎯 URL-Struktur

Dank `.htaccess` funktionieren schöne URLs:
- `/paper` → Papier-Produkte
- `/school` → Schulartikel
- `/shipping` → Versand-Material
- `/safety` → Sicherheitsausrüstung
- `/presentation` → Präsentations-Zubehör
- `/writing-materials` → Schreibwaren

## 🚨 Hinweis

**Demo-Projekt:** Verwendet Standard-Passwort `demo123` - perfekt für Portfolios und Lernzwecke. Für Produktion bitte sichere Credentials verwenden.

## 📄 Lizenz

Dieses Projekt wurde für Bildungszwecke entwickelt.
