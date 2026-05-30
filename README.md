# AN Build — Official Website

**Ashie Holdings and Projects U Ltd**  
Trading as **AN Build**

A premium construction and property holdings company based in Kampala, Uganda.

---

## 🚀 Deploy to GitHub Pages (Step-by-Step)

### 1. Create a GitHub Repository
1. Go to [github.com](https://github.com) and sign in
2. Click **"New repository"** (top right `+` button)
3. Name it: `anbuild-website` (or any name you prefer)
4. Set visibility to **Public**
5. Click **"Create repository"**

### 2. Upload the Files
**Option A — Upload via GitHub website (easiest):**
1. On your new repo page, click **"uploading an existing file"**
2. Drag and drop ALL files from this folder
3. Click **"Commit changes"**

**Option B — Via Git command line:**
```bash
cd anbuild-website
git init
git add .
git commit -m "Initial commit: AN Build website"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/anbuild-website.git
git push -u origin main
```

### 3. Enable GitHub Pages
1. In your repo, go to **Settings**
2. Scroll down to **"Pages"** in the left sidebar
3. Under **"Source"**, select **"Deploy from a branch"**
4. Choose branch: **main** | folder: **/ (root)**
5. Click **Save**

### 4. Your Site is Live!
After 1–2 minutes your site will be available at:
```
https://YOUR_USERNAME.github.io/anbuild-website/
```

---

## 📁 File Structure

```
anbuild-website/
├── index.html        ← Main website (all-in-one)
├── README.md         ← This guide
└── .gitignore        ← Git ignore rules
```

---

## ✏️ How to Customise

### Change Company Details
Open `index.html` and search for these placeholders:

| Find | Replace with |
|------|-------------|
| `info@anbuild.co.ug` | Your real email |
| `+256 700 000 000` | Your real phone number |
| `Est. — Kampala, Uganda` | Your establishment details |
| `12+`, `50+` | Your actual stats |
| Project names & dates | Your real projects |

### Change Colors
At the top of `index.html`, find the `:root` block:
```css
:root {
  --navy: #2d2f6b;       /* Main brand color */
  --warm: #b59a7a;       /* Accent / CTA color */
  --cream: #f5f2ec;      /* Background color */
  --charcoal: #1a1a1a;   /* Dark sections */
}
```

### Add Real Photos
Replace the gradient backgrounds in the project cards with real images:
```css
/* Find lines like this: */
.proj-1 .project-bg { background: linear-gradient(...); }

/* Replace with: */
.proj-1 .project-bg { background: url('images/project1.jpg') center/cover; }
```
Then add your photos to an `images/` folder.

---

## 🛠 Tech Stack

- Pure HTML, CSS, JavaScript — no frameworks, no dependencies
- Google Fonts (Cormorant Garamond + Barlow)
- Fully responsive (mobile + desktop)
- GitHub Pages compatible (no server needed)

---

## 📞 Support

For website changes contact your developer or use Claude.ai to make edits.
