# Generated by Django 3.2.17 on 2023-02-25 12:44

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('vendors', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='vendor',
            name='phone',
            field=models.IntegerField(),
        ),
        migrations.AlterField(
            model_name='vendor',
            name='zip',
            field=models.IntegerField(),
        ),
    ]
