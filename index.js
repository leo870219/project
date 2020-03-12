// index.js
const Koa = require('koa');
const app = new Koa();
const port = process.env.PORT || 3000;

app.use(async function(ctx) {
    ctx.body = 'Hello Koa2';
});

app.listen(port, () => console.log(`Hello Koa2 on ${port} Port`));
