import 'package:animated_notch_bottom_bar/animated_notch_bottom_bar/animated_notch_bottom_bar.dart';
import 'package:bdu_event_connect/screens/home_screen/home.dart';
import 'package:bdu_event_connect/screens/schedule_screen/schedule.dart';
import 'package:flutter/material.dart';
import 'dart:developer';

class SharedBottomBar extends StatefulWidget {
  @override
  _SharedBottomBarState createState() => _SharedBottomBarState();
}

class _SharedBottomBarState extends State<SharedBottomBar> {
  /// Controller to handle PageView and also handles initial page
  final _pageController = PageController(initialPage: 0);

  /// Controller to handle bottom nav bar and also handles initial page
  final _controller = NotchBottomBarController(index: 0);

  int maxCount = 4;

  @override
  void dispose() {
    _pageController.dispose();
    super.dispose();
  }

  /// widget list
  final List<Widget> bottomBarPages = [
    HomePage(),
    CalendarPage(),
    HomePage(),
    HomePage(),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: PageView(
        controller: _pageController,
        physics: const NeverScrollableScrollPhysics(),
        children: List.generate(
            bottomBarPages.length, (index) => bottomBarPages[index]),
      ),
      extendBody: true,
      bottomNavigationBar: (bottomBarPages.length <= maxCount)
          ? AnimatedNotchBottomBar(
              /// Provide NotchBottomBarController
              notchBottomBarController: _controller,
              color: Colors.white,
              showLabel: false,
              notchColor: Colors.lightBlue.shade300,

              /// restart app if you change removeMargins
              removeMargins: false,
              bottomBarWidth: 500,
              durationInMilliSeconds: 300,
              // showBlurBottomBar: true,
              // blurOpacity: 0.2,
              // blurFilterX: 5.0,
              // blurFilterY: 10.0,
              bottomBarItems: [
                const BottomBarItem(
                  inActiveItem: Icon(
                    Icons.home_filled,
                    color: Colors.blueGrey,
                  ),
                  activeItem: Icon(
                    Icons.home_filled,
                    color: Colors.white,
                  ),
                  itemLabel: 'Trang chủ',
                ),
                const BottomBarItem(
                  inActiveItem: Icon(
                    Icons.calendar_month,
                    color: Colors.blueGrey,
                  ),
                  activeItem: Icon(
                    Icons.calendar_month,
                    color: Colors.white,
                  ),
                  itemLabel: 'Lịch trình',
                ),
                const BottomBarItem(
                  inActiveItem: Icon(
                    Icons.newspaper,
                    color: Colors.blueGrey,
                  ),
                  activeItem: Icon(
                    Icons.newspaper,
                    color: Colors.white,
                  ),
                  itemLabel: 'Tin tức',
                ),
                const BottomBarItem(
                  inActiveItem: Icon(
                    Icons.person,
                    color: Colors.blueGrey,
                  ),
                  activeItem: Icon(
                    Icons.person,
                    color: Colors.white,
                  ),
                  itemLabel: 'Cá nhân',
                ),
              ],
              onTap: (index) {
                /// perform action on tab change and to update pages you can update pages without pages
                log('current selected index $index');
                _pageController.jumpToPage(index);
              },
            )
          : null,
    );
  }
}
