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
- PHP 8.5（Laravel Sail）
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
- WSL2（Windowsの場合）

### リポジトリをクローン
```bash
git clone https://github.com/makoto-oshida/meal-planner.git # Linux側のディレクトリにクローンする
cd meal-planner
```

### 環境変数ファイルを作成
```bash
cp .env.example .env
```

### Docker上でComposer依存関係をインストール
```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php84-composer:latest \
composer install
```

### Dockerコンテナ起動
```bash
./vendor/bin/sail up -d
```

### コンテナ起動後の設定
```bash
sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev # 別ターミナルで実行
```

### Sailエイリアスの設定（任意）

使用しているシェルの設定ファイルに以下を追加します。

#### Bash

```bash
echo "alias sail='sh \$([ -f sail ] && echo sail || echo vendor/bin/sail)'" >> ~/.bashrc
source ~/.bashrc
```

#### Zsh
```zsh
echo "alias sail='sh \$([ -f sail ] && echo sail || echo vendor/bin/sail)'" >> ~/.zshrc
source ~/.zshrc
```

### 設定後
以下のようにsailだけでコマンド実行できます。
```bash
sail up -d
sail artisan migrate
sail npm install
```


### アプリにアクセス

Sail起動後、ブラウザで以下にアクセスします。

http://localhost