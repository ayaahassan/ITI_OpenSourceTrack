# Generated by Django 4.0.4 on 2022-06-06 11:01

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Todo',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=100, unique=True, verbose_name='Todo Name')),
                ('priority', models.IntegerField(default=1, verbose_name='Todo Priority')),
                ('todo_date', models.DateField(default='2000-01-01', verbose_name='Date')),
                ('is_done', models.BooleanField(default=False)),
                ('notes', models.TextField(default='')),
                ('creation_time', models.DateTimeField(auto_now_add=True)),
                ('update_time', models.DateTimeField(auto_now=True)),
            ],
            options={
                'verbose_name': 'Todo',
                'verbose_name_plural': 'Todos',
                'ordering': ('-creation_time',),
            },
        ),
        migrations.CreateModel(
            name='Task',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=100, verbose_name='Task Name')),
                ('todo', models.ForeignKey(null=True, on_delete=django.db.models.deletion.CASCADE, to='todo.todo')),
            ],
        ),
    ]
