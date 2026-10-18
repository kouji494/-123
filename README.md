# タスク管理API

Laravel 10を使用したタスク管理APIです。

## 使用技術

- PHP
- Laravel 10
- MySQL
- Docker / Laravel Sail
- Postman

## 機能

- タスク一覧取得（GET）
- タスク新規作成（POST）
- タスク詳細取得（GET）
- タスク更新（PUT）
- タスク削除（DELETE）
- バリデーションエラー（422）
- 存在しないタスクへのアクセス（404）

## API一覧

| メソッド | URL             | 機能     |
| -------- | --------------- | -------- |
| GET      | /api/tasks      | 一覧取得 |
| POST     | /api/tasks      | 新規作成 |
| GET      | /api/tasks/{id} | 詳細取得 |
| PUT      | /api/tasks/{id} | 更新     |
| DELETE   | /api/tasks/{id} | 削除     |

## セットアップ

1. composer install
2. .env.example を .env にコピー
3. ./vendor/bin/sail up -d
4. ./vendor/bin/sail artisan key:generate
5. ./vendor/bin/sail artisan migrate:fresh --seed

## 備考

認証機能は実装していません。
新規タスクはテストユーザー（ID:1）に紐づけています。
