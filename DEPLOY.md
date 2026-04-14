# Blue Cow Digital — Deploy to GitHub + Vercel

## Step 1 — Run these commands in your Laragon terminal (once only)

Open **Laragon > Terminal** (or any terminal with PHP in PATH) in the project folder:

```bash
cd "C:\laragon\www\bcd new design"

# 1. Generate a secure app key (copy the output — you'll need it in Step 3)
php artisan key:generate --show

# 2. Pre-cache config and routes so Vercel doesn't need to write them at runtime
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## Step 2 — Push to GitHub

Run in the same terminal:

```bash
cd "C:\laragon\www\bcd new design"

# Initialise the repo
git init
git branch -M main

# Stage everything (vendor is excluded by .gitignore)
git add .
git commit -m "Initial commit — Blue Cow Digital website"

# Create a new repo on GitHub at https://github.com/new
# Then link and push (replace YOUR_USERNAME and YOUR_REPO):
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
git push -u origin main
```

---

## Step 3 — Deploy on Vercel

1. Go to **https://vercel.com** and sign in (use your GitHub account).
2. Click **Add New → Project** and import your GitHub repo.
3. Vercel will auto-detect `vercel.json` — no framework preset needed.
4. Under **Environment Variables**, add every variable from `.env.example`, including:

| Variable | Value |
|---|---|
| `APP_NAME` | Blue Cow Digital |
| `APP_ENV` | production |
| `APP_DEBUG` | false |
| `APP_URL` | https://your-vercel-domain.vercel.app |
| `APP_KEY` | base64:... *(the key from Step 1)* |
| `SESSION_DRIVER` | cookie |
| `CACHE_STORE` | array |
| `LOG_CHANNEL` | errorlog |
| `LOG_LEVEL` | error |

5. Click **Deploy**. Vercel will build and go live in ~60 seconds.

---

## Step 4 — Custom Domain (optional)

In Vercel → your project → **Settings → Domains**, add `bluecowdigital.co.uk`.  
Vercel will give you DNS records to add at your domain registrar (usually an A record or CNAME).

---

## Future updates

Every push to `main` on GitHub will automatically trigger a new Vercel deployment:

```bash
git add .
git commit -m "Your change description"
git push
```
