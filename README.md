# Barangay Bulletin – Purok Braulio

Lab Activity 10 for 4-334 Full-Stack Web Development (Eloquent, Migrations & Seeding).

An online bulletin board for Barangay Matina Crossing Hall where officials post announcements and residents can search, filter by category, and page through the posts. All the data comes from the SQLite database through Eloquent.

## My personalized data

| Item | Value |
|---|---|
| Site title | Barangay Bulletin – Purok Braulio |
| My Kagawad author | Kagawad Alessandra Veronica Braulio (`kagawad.braulio@bulletin.test`), made with `Author::create()` in `AuthorSeeder` |
| Posts per page | **7**, because my last name "Braulio" has 7 letters |
| Custom category | **Livelihood** (for livelihood programs and trainings in the barangay) |
| Birthday post | "Purok Braulio Clean-up Drive", pinned, `published_at` = **June 24, 2026** |

## What's inside

- **Migrations:** `create_authors_table`, `create_posts_table`, and a separate `add_views_to_posts_table` that adds the `views` column with `Schema::table`.
- **Models:** `Author` and `Post` with `$fillable` and casts for the booleans and `published_at`.
- **Factories:** `AuthorFactory` and `PostFactory` (with a `draft()` state). Categories are Announcement, Health, Peace & Order, Ayuda and Livelihood.
- **Seeders:** `DatabaseSeeder` calls `AuthorSeeder` then `PostSeeder`. Result: 5 authors and 51 posts (40 published, 10 drafts, plus my pinned post).
- **Pages:**
  - `/posts` shows published posts only, pinned first then newest, with search (`?q=`), category filter (`?category=`) and pagination.
  - `/posts/{id}` shows one post and adds 1 to its views. Drafts return 404.
- **Tinker screenshot:** `docs/tinker.png` (find → change title → save).

## How to run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run dev
php artisan serve
```

If `database/database.sqlite` doesn't exist yet, create it first (PowerShell: `New-Item database/database.sqlite`).

Run `npm run dev` and `php artisan serve` in two separate terminals, then open http://127.0.0.1:8000. It redirects to `/posts`.
