# Generated by Django 3.2.17 on 2023-02-25 12:41

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='user',
            name='alternate_phone',
            field=models.IntegerField(),
        ),
        migrations.AlterField(
            model_name='user',
            name='gst_no',
            field=models.IntegerField(),
        ),
        migrations.AlterField(
            model_name='user',
            name='phone',
            field=models.IntegerField(),
        ),
        migrations.AlterField(
            model_name='user',
            name='zip',
            field=models.IntegerField(),
        ),
    ]
