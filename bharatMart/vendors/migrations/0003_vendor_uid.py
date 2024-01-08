# Generated by Django 3.2.17 on 2023-02-25 12:58

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0003_alter_user_uid'),
        ('vendors', '0002_auto_20230225_1814'),
    ]

    operations = [
        migrations.AddField(
            model_name='vendor',
            name='uId',
            field=models.ForeignKey(default=0, on_delete=django.db.models.deletion.CASCADE, to='users.user'),
        ),
    ]