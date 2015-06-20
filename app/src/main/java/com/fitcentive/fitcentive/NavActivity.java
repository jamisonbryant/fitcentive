package com.fitcentive.fitcentive;

import android.app.Activity;
import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.support.v4.widget.DrawerLayout;

/**
 * Nav Activity
 *
 * Implements the navigation menu that allows the user to get around the app.
 *
 * @author Jamison Bryant <robojamison@gmail.com>
 */
public class NavActivity extends AppCompatActivity
        implements NavigationDrawerFragment.NavigationDrawerCallbacks {

    /**
     * Fragment managing the behaviors, interactions and presentation of the navigation drawer.
     */
    private NavigationDrawerFragment mNavigationDrawerFragment;

    /**
     * Used to store the last screen title. For use in {@link #restoreActionBar()}.
     */
    private CharSequence mTitle;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_nav);

        mNavigationDrawerFragment = (NavigationDrawerFragment)
                getSupportFragmentManager().findFragmentById(R.id.navigation_drawer);
        mTitle = getTitle();

        // Set up the drawer.
        mNavigationDrawerFragment.setUp(
                R.id.navigation_drawer,
                (DrawerLayout) findViewById(R.id.drawer_layout));
    }

    @Override
    public void onNavigationDrawerItemSelected(int position) {
        // update the main content by replacing fragments
        FragmentManager fragmentManager = getSupportFragmentManager();
        fragmentManager.beginTransaction()
                .replace(R.id.container, PlaceholderFragment.newInstance(position + 1))
                .commit();
    }

    public void onSectionAttached(int number) {
        switch (number) {
            case 1:
                mTitle = getString(R.string.section_data);
                break;
            case 2:
                mTitle = getString(R.string.section_rewards);
                break;
            case 3:
                mTitle = getString(R.string.section_analytics);
                break;
        }
    }

    public void restoreActionBar() {
        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowTitleEnabled(true);
        actionBar.setTitle(mTitle);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        if (!mNavigationDrawerFragment.isDrawerOpen()) {
            // Only show items in the action bar relevant to this screen
            // if the drawer is not showing. Otherwise, let the drawer
            // decide what to show in the action bar.
            getMenuInflater().inflate(R.menu.nav, menu);
            restoreActionBar();
            return true;
        }

        return super.onCreateOptionsMenu(menu);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle selected action
        switch (item.getItemId()) {
            case R.id.action_food:
                Intent food_intent = new Intent(this, FoodActivity.class);
                startActivity(food_intent);
                break;

            case R.id.action_exercise:
                Intent exercise_intent = new Intent(this, ExerciseActivity.class);
                startActivity(exercise_intent);
                break;

            case R.id.action_events:
                Intent events_intent = new Intent(this, EventsActivity.class);
                startActivity(events_intent);
                break;

            case R.id.action_incentives:
                Intent incentives_intent = new Intent(this, IncentivesActivity.class);
                startActivity(incentives_intent);
                break;

            case R.id.action_tokens:
                Intent tokens_intent = new Intent(this, TokensActivity.class);
                startActivity(tokens_intent);
                break;

            case R.id.action_performance:
                Intent performance_intent = new Intent(this, PerformanceActivity.class);
                startActivity(performance_intent);
                break;

            case R.id.action_leaderboard:
                Intent leaderboard_intent = new Intent(this, LeaderboardActivity.class);
                startActivity(leaderboard_intent);
                break;

            case R.id.action_settings:
//                Intent settings_intent = new Intent(this, FoodActivity.class);
//                startActivity(settings_intent);
                break;
        }

        return super.onOptionsItemSelected(item);
    }

    /**
     * A placeholder fragment containing a simple view.
     */
    public static class PlaceholderFragment extends Fragment {
        /**
         * The fragment argument representing the section number for this
         * fragment.
         */
        private static final String ARG_SECTION_NUMBER = "section_number";

        /**
         * Returns a new instance of this fragment for the given section
         * number.
         */
        public static PlaceholderFragment newInstance(int sectionNumber) {
            PlaceholderFragment fragment = new PlaceholderFragment();
            Bundle args = new Bundle();
            args.putInt(ARG_SECTION_NUMBER, sectionNumber);
            fragment.setArguments(args);
            return fragment;
        }

        public PlaceholderFragment() {
        }

        @Override
        public View onCreateView(LayoutInflater inflater, ViewGroup container,
                                 Bundle savedInstanceState) {
            View rootView = inflater.inflate(R.layout.fragment_nav, container, false);
            return rootView;
        }

        @Override
        public void onAttach(Activity activity) {
            super.onAttach(activity);
            ((NavActivity) activity).onSectionAttached(
                    getArguments().getInt(ARG_SECTION_NUMBER));
        }
    }


}
