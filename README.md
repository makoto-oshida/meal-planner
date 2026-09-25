# Meal Planner

## 概要
- 1週間の献立を作成しユーザーに提案するWebアプリ

## 主な機能（予定）
- 認証機能　（ユーザー登録／ログイン／ログアウト）
- オンボーディング機能　（家族構成・アレルギー登録）
- レシピ登録機能　（オリジナルレシピ/インスタグラムのURL）
- 献立作成機能　（ユーザーが登録したレシピの中からAIで自動生成）
- 通知機能　（プッシュ通知）

## 使用技術
- PHP 8.5
- Laravel 13
- MySQL 8.4
- Blade


## 開発環境
- Docker
- Laravel Sail
- WSL2
- Ubuntu 24.04


## 環境構築

### 必要要件
- Git
- Docker Desktop（または Docker Engine）
- PHP 8.3以上
- composer

### リポジトリをクローン
- git clone https://github.com/makoto-oshida/meal-planner.git
- cd meal-planner

### 環境変数ファイルを作成
- cp .env.example .env

### Composerインストール
- composer install

### Dockerコンテナ起動
- ./vendor/bin/sail up -d