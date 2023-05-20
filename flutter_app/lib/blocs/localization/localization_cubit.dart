import 'package:bloc/bloc.dart';
import 'package:flutter/material.dart';
import 'package:flutter_app/helpers/local_storage/local_storage_helper.dart';
import 'package:flutter_app/translation/app_translation.dart';

part 'localization_state.dart';

class LocalizationCubit extends Cubit<LocalizationState> {
  LocalizationCubit() : super(LocalizationInitial()) {
    init();
  }

  void init() async {
    final Locale locale = await LocalStoageHelper.getLocale();
    emit(LocalizationFetched(locale));
  }

  void english() async {
    const Locale englishLocale = AppTranslation.english;
    await LocalStoageHelper.setLocal(englishLocale);
    emit(LocalizationFetched(englishLocale));
  }

  void dark() async {
    const Locale arabicLocale = AppTranslation.arabic;
    await LocalStoageHelper.setLocal(arabicLocale);
    emit(LocalizationFetched(arabicLocale));
  }
}
