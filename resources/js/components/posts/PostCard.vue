<template>
    <div class="card my-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title">{{ post.title }}</h5>
            <router-link :to="{name: 'post-detail', params: {slug: post.slug}}" class="btn btn-primary btn-sm">Vedi</router-link>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Autore: {{ post.author.name }}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Pubblicato il: {{ publishedAt }}</h6>
            <p class="card-text">{{ post.content }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <span class="badge badge-pill" :class="`badge-${post.category ? post.category.color : 'light'}`">
                {{ post.category ? post.category.label : 'Nessuna' }}
            </span>
            <div>
                <span v-for="tag in post.tags" :key="tag.id" class="badge mr-1 text-white" :style="`background-color: ${tag.color}`">
                    {{ tag.label }}
                </span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostCard",
    props: {
        post: Object,
    },
    computed: {
        publishedAt() {
            const postDate = new Date(this.post.created_at);
            let day = postDate.getDate();
            let month = postDate.getMonth() + 1;
            const year = postDate.getFullYear();

            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;

            return `${day}/${month}/${year}`;

        }
    }
};
</script>

<style>

</style>