# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('alumnosdaw', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='AlumnoDAW',
            fields=[
                ('id', models.AutoField(auto_created=True, serialize=False, verbose_name='ID', primary_key=True)),
                ('nombre', models.CharField(max_length=40)),
                ('apellido', models.CharField(max_length=40)),
                ('lenguaje', models.CharField(max_length=40, choices=[('Javascript', 'Javascript'), ('PHP', 'PHP'), ('Python', 'Python'), ('Java', 'Java')], default='PHP')),
            ],
        ),
        migrations.DeleteModel(
            name='Snippet',
        ),
    ]
