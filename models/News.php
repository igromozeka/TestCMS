<?php


class News
{
    /**
     * Получение списка новостей
     */
    public static function getNewsList(){

        $pdo = DBconnect::getConnection();

        $query = "SELECT news.id AS news_id, news.title, short_text, add_date,
                    news_image, authors.id AS author_id, fname, lname, avatar, name, class_name
                    FROM news, authors, categories
                    WHERE author_id = authors.id
                    AND category_id = categories.id 
                    ORDER BY add_date DESC;";
        return $pdo->query($query)->fetchAll();
    }

    /**
     * Получение одной новости по id
     */
    public static function getNewsItemById($id){
        // запрос к бд
        // возврат массива с новостью
        if($id){
            $pdo = DBconnect::getConnection();

            // получаем новость и автора
            $query = "SELECT news.id as news_id, title, full_text as text, add_date, news_image, 
                authors.id as author_id, fname, lname, shortinfo, biography 
                FROM news, authors 
                WHERE author_id = authors.id AND news.id = ?;";
            $stm = $pdo->prepare($query);
            $stm->execute([$id]);
            $newsItem = $stm->fetch();
            return $newsItem;
        }
    }
    /**
     * Получение новостей по указанной рубрике
     */
    public static function getNewsItemsByCategoryTitle($category_id){
        $pdo = DBconnect::getConnection();

        // id, title, add_date, image
        $query = "SELECT news.id AS news_id, title, short_text, add_date, news_image
                    FROM news, categories
                    WHERE category_id = categories.id
                    AND categories.path = '$category_id'
                    ORDER BY add_date DESC;";
        return $pdo->query($query)->fetchAll();
    }
    /**
     * Получение идентификатора категории по title
     */

    /**
     * Получение списка новостей по указанному id категории
     */

    /**
     * Получение списка трёх случайных новостей
     *
     */
    public static function getNewsRandom(){
        // запрос к бд
        $pdo = DBconnect::getConnection();
        // возврат массива с новостью
        $query = "SELECT id, title, news_image 
                    FROM news 
                    ORDER BY RAND()
                    LIMIT 7;";
        return $pdo->query($query)->fetchAll();
    }
    /**
     * Получение списка новостей для главной страницы
     */
    public static function getNewsIndex(){
        // запрос к бд
        $pdo = DBconnect::getConnection();
        // возврат массива с новостью
        $query = "SELECT news.id AS news_id, news.title, short_text, add_date,
                    news_image, authors.id AS author_id, fname, lname, avatar, name, class_name
                    FROM news, authors, categories
                    WHERE author_id = authors.id
                    AND category_id = categories.id 
                    ORDER BY add_date DESC
                    LIMIT 5;";
        return $pdo->query($query)->fetchAll();
    }
}