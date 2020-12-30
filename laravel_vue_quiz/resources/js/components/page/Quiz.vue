<template>
    <div>
        <header>
            <div class="container text-center">
                <h1>4 Answers Quiz 4択クイズ&クイズ徹底解説</h1>
                <a href="/">
                    <img
                        class="header-nav__logo"
                        src="/images/header-logo.png"
                    />
                </a>
            </div>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button
                            type="button"
                            class="navbar-toggle"
                            data-toggle="collapse"
                            data-target="#navbar-ex-collapse"
                        >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="header-nav__home" href="/"
                            >ホーム</a
                        >
                    </div>
                    <div
                        class="collapse navbar-collapse"
                        id="navbar-ex-collapse"
                    >
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a id="header-nav__login" href="/login"
                                    >ログイン</a
                                >
                            </li>
                            <li>
                                <a id="header-nav__register" href="/register"
                                    >ユーザー登録</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <article class="col-md-8 col-xs-12">
                    <section>
                        <h2 class="quiz-question-h2">
                            <img
                                class="quiz-question__logo"
                                src="/images/what-is-mark.png"
                            />
                            第{{ quizNumber }}問
                        </h2>
                        <p>{{ title }}</p>
                        <div v-if="imageSrc">
                            <img
                                class="img-responsive"
                                id="quiz-image"
                                :src="'/images/quiz/' + imageSrc"
                            />
                        </div>
                        <div class="quiz-answer__list">
                            <ul>
                                <li
                                    v-for="(answer, index) in answers"
                                    :key="index"
                                >
                                    <a>
                                        <button
                                            @click="goAnswer(index + 1)"
                                            :disabled="isAlreadyAnswered"
                                        >
                                            {{ index + 1 }}
                                        </button>
                                    </a>
                                    {{ answer }}
                                </li>
                            </ul>
                        </div>
                        <div class="text-right">
                            カテゴリー: {{ categoryName }}
                        </div>
                    </section>
                    <section>
                        <h2 class="quiz-correct-h2">
                            <img
                                class="quiz-correct__logo"
                                src="/images/correct-mark.png"
                            />正解
                        </h2>
                        <p>
                            <button
                                class="quiz-correct-answer"
                                v-show="isAlreadyAnswered"
                                disabled
                            >
                                {{ correctAnswerNo }}
                            </button>
                        </p>
                        <button
                            @click="goAnswer(0)"
                            v-show="!isAlreadyAnswered"
                        >
                            正解を表示する
                        </button>
                        <div class="alert alert-info" v-show="isCorrect">
                            <strong>正解!</strong>
                        </div>
                        <div class="alert alert-danger" v-show="isMistake">
                            <strong>不正解!</strong>
                        </div>
                    </section>
                    <section>
                        <h2 class="quiz-commentary-h2">
                            <img
                                class="quiz-commentary__logo"
                                src="/images/commentary-mark.png"
                            />解説
                        </h2>
                        <div
                            class="quiz-commentary__text"
                            v-show="isAlreadyAnswered"
                            style="white-space:pre-wrap; word-wrap:break-word;"
                        >
                            {{ commentary }}
                        </div>
                        <button
                            type="button"
                            class="btn btn-primary center-block"
                        >
                            次の問題へ
                        </button>
                        <button type="button" class="center-block">
                            結果を見る
                        </button>
                    </section>
                </article>
                <the-sidebar></the-sidebar>
            </div>
        </main>

        <footer>
            <div class="container text-center">
                <small>© 2019 4Answers-quiz. All rights reserved.</small>
            </div>
        </footer>
    </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
import TheSidebar from "../layout/TheSidebar";

export default {
    components: {
        TheHeader,
        TheFooter,
        TheSidebar
    },
    data() {
        return {
            quizData: []
        };
    },
    mounted() {
        const categories = this.$route.query.categories;
        this.$http.get(`/api/quiz?categories=${categories}`).then(response => {
            this.quizData = response.data;
            console.log(this.quizData);
        });
    }
};
</script>
